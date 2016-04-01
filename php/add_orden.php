<?php

	require_once 'funciones_db.php';
	ob_start();
	session_start(); // Starting Session	
	$cedula = "";
	$orden_compra = "";
	$zip = "";
	$city = "";
	$municipio = "";

	$db = new funciones_BD();
	if($_SESSION["user_name"] != ""){ 
		$cedula = $_SESSION["user_cedula"];
		if($cedula != ""){
			if(!empty($_POST["json"]) && !empty($_POST["city"]) && !empty($_POST["zip"]) && !empty($_POST["municipio"])){
				$city = $_POST["city"];
				$municipio = $_POST["municipio"];
				$zip = $_POST["zip"];
				$json = json_decode($_POST["json"]);				
				$array = explode(",", $json);
				$orden_compra = randomText(15);
				$codigo = $db->validateOrden($orden_compra);
				if(!$codigo){
					AddData($array, $orden_compra);
				}
			}else{
				echo -2;
			}	
		}else{
			echo -1;
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}


	function randomText($length) {
	    $pattern = "1234567890ABCDEFGHIJKMNLOPQRSTUVWXYZ";
	    $key = "";
	    for($i = 0; $i < $length; $i++) {
	        $key .= $pattern{rand(0, 35)};
	    }
	    return $key;
	}//end method 	

	function insert($cantidad, $codigo, $total, $code_orden){
		$fecha = date('Y-n-j H:i:s');
        $query = mysql_query("INSERT INTO producto_orden(codigo_producto, cantidad_caja, total_producto, fecha_producto, codigo_orden, orden_generada) 
                               VALUES($codigo, $cantidad, $total, '$fecha', '$code_orden',0)");
        if ($query) {
            return true;
        } else {
            return false;
        }
	}//end method

	function AddData($array, $orden_compra){
		$bool1 = false;
		$bool2 = false;
		$bool3 = false;
		$bool4 = false;
		$bool5 = false;	

		if($array[0] != "" && $array[1] != "" && $array[2] != ""){
			if(insert($array[0], $array[1], $array[2], $orden_compra)){
				$bool1 = true;	
			}	
		}

		if($array[3] != "" && $array[4] != "" && $array[5] != ""){
			if(insert($array[3], $array[4], $array[5], $orden_compra)){
				$bool2 = true;	
			}	
		}

		if($array[6] != "" && $array[7] != "" && $array[8] != ""){
			if(insert($array[6], $array[7], $array[8], $orden_compra)){
				$bool3 = true;	
			}	
		}

		if($array[9] != "" && $array[10] != "" && $array[11] != ""){
			if(insert($array[9], $array[10], $array[11], $orden_compra)){
				$bool4 = true;	
			}	
		}

		if($array[12] != "" && $array[13] != "" && $array[14] != ""){
			if(insert($array[12], $array[13], $array[14], $orden_compra)){
				$bool5 = true;	
			}	

		}				
																			 
        $result = mysql_query("SELECT codigo_orden, SUM(total_producto) from producto_orden WHERE codigo_orden = '$orden_compra'");
        $num_rows = mysql_num_rows($result); //numero de filas retornadas
        if ($num_rows > 0) {
        	$cedula = $_SESSION["user_cedula"];
           	$qry = mysql_fetch_array($result);
           	$codigo_orden_result = $qry[0];
           	$total_result = $qry[1];
			$fecha = date('Y-n-j H:i:s');

        	$query3 = mysql_query("INSERT INTO usuario_local(cedula, ciudad, municipio, codigo_postal) 
                               VALUES($cedula, '$city', '$municipio', $zip)");
        	if($query1){
        		echo 3;
        	}else{
        		echo 4;
        	}


        	$query1 = mysql_query("INSERT INTO orden_compra(codigo_orden, monto, descripcion, fecha_orden, cedula_cliente, estado) 
                               VALUES('$codigo_orden_result', $total_result, 'Orden de Compra Valido por 48 Hora', '$fecha', $cedula,'Pendiente')");           
        	if($query1){
        		echo 1;
        	}else{
        		echo 2;
        	}
        } else {
            echo 0;
        }		
	}
?>



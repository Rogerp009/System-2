<?php

	require_once 'funciones_db.php';
	ob_start();
	session_start(); // Starting Session	

	$db = new funciones_BD();
	if($_SESSION["user_name"] != ""){ 
        if(empty($_POST["codigo_producto"])){//agregar prdocuto o modificar el prodcuto tag
            echo -1;
        }else{
        	$codigo = $_POST["codigo_producto"]; 
        	if($codigo != ""){
        		$queryStock = mysql_query("SELECT * from stock WHERE codigo_producto = $codigo");
				$num_rows_producto = mysql_num_rows($queryStock); //numero de filas retornadas
				$array = array();   
				if($num_rows_producto >= 0){
					#$result_producto = mysql_fetch_array($queryProducto);
					while ($row = mysql_fetch_assoc($queryStock)) {
						$array[] = $row	;
					}
					header('Content-type: application/json; charset=utf-8');
					echo json_encode($array);
				}				     		
        	}else{
        		echo -1;
        	}
        }		
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
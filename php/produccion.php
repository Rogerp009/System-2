<?php
	//Post
	require_once "funciones_db.php";

	session_start();

	//Var
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{
		if(empty($_POST["cajas"]) || empty($_POST["cantidad_unidad"])|| empty($_POST["fecha_nueva"])|| empty($_POST["codigo"])){//agregar prdocuto o modificar el prodcuto tag
			echo -1;
		}else{		;	
            $cajas = $_POST["cajas"];
            $cantidad_unidad = $_POST["cantidad_unidad"];
            $fecha_nueva = $_POST["fecha_nueva"];           
            $codigo = $_POST["codigo"];
			$db = new funciones_BD();			
			if($db->addProduccion($codigo, $cajas, $cantidad_unidad, $fecha_nueva)){
				$query = mysql_query("SELECT COUNT(*) FROM stock WHERE codigo_producto = $codigo ");
				$num_rows = mysql_fetch_array($query);					
				if($num_rows[0] == 0){
					$stock = $db->ADDstock($codigo, $cajas, $cantidad_unidad, $fecha_nueva);
					if($stock){
						echo 1;
					}else{
						echo 0;
					}
				}else{
					if($db->AddStock0($codigo, $cajas, $cantidad_unidad, $fecha_nueva)){
						echo 1;
					}else{
						echo 0;
					}
				}					
			}else{
				echo 0;			
			 }	            				
		}
	}//end 
?>
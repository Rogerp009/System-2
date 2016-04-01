<?php
	//Post
	require_once "funciones_db.php";

	session_start();

	//Var
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{
		if(empty($_POST["precio_caja"]) || empty($_POST["precio"])|| empty($_POST["nombre"])|| empty($_POST["tipo_producto"]) || empty($_POST["presentacion"])){//agregar prdocuto o modificar el prodcuto tag
			echo -1;
		}else{
			$nombre = $_POST["nombre"];
			$precio = $_POST["precio"];
			$precio_caja = $_POST["precio_caja"];			
			$tipo_producto = $_POST["tipo_producto"];
			$presentacion = $_POST["presentacion"];
			$db = new funciones_BD();
			$fecha = date("Y-m-d H:i:s");				
			if($db->addProducto($nombre, $tipo_producto, $presentacion, $fecha, $precio, $precio_caja)){
				echo 1;					
			}else{
				echo 0;			
			 }								
		}
	}
?>
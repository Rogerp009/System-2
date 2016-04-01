<?php
	//Post
	require_once "funciones_db.php";

	session_start();

	//Var
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{
		if(empty($_POST["telefono"]) || empty($_POST["rol"]) ||empty($_POST["direccion"]) ||empty($_POST["nombre"]) ||empty($_POST["apellido"]) ||empty($_POST["cedula"]) ||empty($_POST["email"]) ||empty($_POST["username"]) || empty($_POST["password"]) ){
			echo -1;
		}else{
			$nombre = $_POST["nombre"]; 
			$telefono = $_POST["telefono"]; 			
			$apellido = $_POST["apellido"];
			$cedula = $_POST["cedula"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$direccion = $_POST["direccion"];
			$rol = $_POST["rol"];			
			$fecha = date("Y-m-d H:i:s");
			$fecha_modificacion = date("Y-m-d H:i:s");
			$db = new funciones_BD();
			$user = $db->addUser($nombre, $apellido, $cedula, $telefono, $fecha, $rol, $fecha_modificacion, $direccion, $username, $password, $email);
			if($user){
				echo 1;					
			}else{
				echo 0;			
			}		
		}
	}
?>
<?php
	//Post
	require_once "funciones_db.php";

	session_start();

	//Var
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{
		if(empty($_POST["matricula"]) || empty($_POST["marca"]) ||empty($_POST["modelo"])){
			echo -1;
		}else{
			$matricula = $_POST["matricula"]; 
			$marca = $_POST["marca"]; 			
			$modelo = $_POST["modelo"];		
			$fecha = date("Y-m-d H:i:s");
			$db = new funciones_BD();
			$user = $db->addCamion($matricula, $marca, $modelo, $fecha);
			if($user){
				echo 1;					
			}else{
				echo 0;			
			}		
		}
	}
?>
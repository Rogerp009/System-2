<?php
	//Post
	require_once 'funciones_db.php';

	if( empty($_POST['nombre']) ||
		empty($_POST['apellido']) ||
		empty($_POST['cedula']) ||
		empty($_POST['email']) ||
		empty($_POST['username']) ||
		empty($_POST['password']))
	{
		return false;
	}//End if
	
	//Var
	$nombre = $_POST['nombre']; 
	$apellido = $_POST['apellido'];
	$cedula = $_POST['cedula'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new funciones_BD();
		if($db->addUser($nombre, $apellido, $cedula, $username, $password, $email)){
			echo 1;					
		}else{
			echo 0;			
		}	

?>
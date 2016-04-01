<?php

	require_once 'funciones_db.php';
	session_start();
	$db = new funciones_BD();

	$username = "";

	if($_SESSION["user_name"] != ""){ 
		$username = $_SESSION["user_name"];
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

	if($username != ""){
		if(empty($_POST['password'])){
			echo -1;
		}else{
			$password = $_POST['password'];
			if($db->userExist($username)){
				Pass($password, $username);		
			}else{
				echo 2;					
			}
		}
	}else{
		echo -1;
	}

	function Pass($password, $username){
		$db = new funciones_BD();
		if($db->updatePass($password, $username)){
			echo 1;					
		}else{
			echo 0;			
		}	
	}	
?>
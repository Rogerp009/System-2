<?php

	require_once 'funciones_db.php';
	session_start();
	$db = new funciones_BD();

	if($_SESSION["user_name"] != ""){ 
		$username = $_SESSION["user_name"];
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

	if($username != ""){
		if(empty($_POST['email'])){
			echo -1;
		}else{
			$email = $_POST['email'];
			if($db->userExist($username)){
				Email($email, $username);		
			}else{
				echo 2;					
			}
		}
	}else{
		echo -1;
	}

	function Email($email, $username){
		$db = new funciones_BD();
		if($db->updateEmail($email, $username)){
			echo 1;					
		}else{
			echo 0;			
		}	
	}	
?>
<?php
	session_start(); // Starting Session
	$username = "";
	$password = "";

	//Variables		
	$username = $_POST['username'];

	require_once 'funciones_db.php';
	
	$db = new funciones_BD();
		if($db->userExist($username){
			echo 1;	
		}else{
			echo 0;
			
		}
?>




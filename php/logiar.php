<?php
	session_start(); // Starting Session

	require_once 'funciones_db.php';

	if(isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']){
		//Variables		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		$db = new funciones_BD();
			if($db->login($username, $password)){
				echo 1;	
			}else{
				echo 0;		
			}		
	}

?>




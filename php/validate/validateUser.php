<?php
	//Variables		
	require_once "/../funciones_db.php";
	if(isset($_POST["username"])) {
		$username = $_POST["username"];		
		$db = new funciones_BD();
		if($db->userExist($username)){
			echo 1;	
		}else{
			echo 0;
			
		}
	}//End if	
?>




<?php
	//Variables		
	require_once "/../funciones_db.php";
	if(isset($_POST["nombre"])) {
		$username = $_POST["nombre"];		
		$db = new funciones_BD();
		if($db->validateNombre($username)){
			echo 1;	
		}else{
			echo 0;
			
		}
	}//End if	
?>




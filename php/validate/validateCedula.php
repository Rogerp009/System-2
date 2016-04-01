<?php
	//Variables		
	require_once "/../funciones_db.php";
	if(isset($_POST["cedula"])) {
		$cedula = $_POST["cedula"];		
		$db = new funciones_BD();
		if($db->validateCedula($cedula)){
			echo 1;	
		}else{
			echo 0;
			
		}
	}//End if	
?>




<?php
	//Variables		
	require_once "/../funciones_db.php";
	if(isset($_POST["numero"])) {
		$numero = $_POST["numero"];		
		$db = new funciones_BD();
		if($db->validateNumero($numero)){
			echo 1;	
		}else{
			echo 0;
			
		}
	}//End if	
?>




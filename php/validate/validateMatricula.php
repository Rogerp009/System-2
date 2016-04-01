<?php
	//Variables		
	require_once "/../funciones_db.php";
	if(isset($_POST["matricula"])) {
		$matricula = $_POST["matricula"];		
		$db = new funciones_BD();
		if($db->validateMatricula($matricula)){
			echo 1;	
		}else{
			echo 0;
			
		}
	}//End if	
?>




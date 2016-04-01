<?php		
	require_once "/../funciones_db.php";

	if(isset($_POST["email"])) {
		$email = $_POST["email"];		
		if($email != ""){
			$db = new funciones_BD();
			if($db->validateEmail($email)){
				echo 1;	
			}else{
				echo 0;			
			}
		}else{
			echo 0;
		}
	}//End if	
?>




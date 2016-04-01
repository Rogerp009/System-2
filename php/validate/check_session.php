<?php
	//Main session
	session_start();
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		require_once("php/destroy_session.php");
	}else{
		$fechaGuardada = $_SESSION["user_acceso"];
		$ahora = date('Y-n-j H:i:s'); //La fecha y hora actual
		$transcurrido = (strtotime($ahora)) - strtotime($fechaGuardada);
			if($transcurrido > 30000000){//86400
				header("Location:/../session.php");
				require_once("php/destroy_session.php"); 
			}else{
				$_SESSION['user_acceso'] = $ahora;
			}
	}
?>

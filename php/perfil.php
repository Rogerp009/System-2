<?php	
	require_once 'funciones_db.php';

	session_start();

	$db = new funciones_BD();
	//Var
	if($_SESSION["user_name"] != ""){ 
		$username = $_SESSION["user_name"];
 		$password = $_SESSION['user_password'];
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}
	
 	if($username != "" && $password != ""){
 		if($db->login($username, $password)){
 			$jsondata = $db->perfil($username);
 			if($jsondata != null){
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($jsondata);	
 			}
 		}else{
			$jsondata = array("not_exist" => 1);
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($jsondata);			
 		}
 	}else{
		$jsondata = array("no_user" => 1);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($jsondata);		
 	}	
?>




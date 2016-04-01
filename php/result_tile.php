<?php
	require_once 'funciones_db.php';
	$db = new funciones_BD();
	ob_start();
	session_start(); // Starting Session	
				
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{		
		if($db->reservas() != 0 || $db->reservas() != null){
			$jsondata = $db->reservas();
			$array = array();
			if($jsondata != null){
				while ($data = mysql_fetch_assoc($jsondata)) {
						$array[] = $data;
				}
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($array);
			}else{
				header('Content-type: application/json; charset=utf-8');
				echo json_encode(0);	
			}
		}else{
			header('Content-type: application/json; charset=utf-8');
			echo json_encode(0);	
		}
	}	
?>

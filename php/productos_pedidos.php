<?php

	require_once 'funciones_db.php';
	ob_start();
	session_start(); // Starting Session	

	$db = new funciones_BD();
	if($_SESSION["user_name"] != ""){ 
		$queryProducto = mysql_query("SELECT * from producto");
		$num_rows_producto = mysql_num_rows($queryProducto); //numero de filas retornadas
		$array = array();
		if($num_rows_producto >= 0){
			#$result_producto = mysql_fetch_array($queryProducto);
			while ($row = mysql_fetch_assoc($queryProducto)) {
				$array[] = $row	;
			}
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($array);
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
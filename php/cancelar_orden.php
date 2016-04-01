<?php

	require_once 'funciones_db.php';
	ob_start();
	session_start(); // Starting Session	

	$db = new funciones_BD();
	if($_SESSION["user_name"] != ""){ 
        if(!empty($_POST["orden_compra"])){//agregar prdocuto o modificar el prodcuto tag
           $codigo = $_POST["orden_compra"]; 
        	if($codigo != ""){
        		$query = mysql_query("DELETE FROM orden_compra WHERE codigo_orden = '$codigo'");
                if($query){
        			echo 1;
        		}else{
        			echo 0;
        		}

				}				     		
        	}else{
        		echo -1;
        	}		
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
<?php
	require_once 'funciones_db.php';

	session_start();

	$db = new funciones_BD();
	$queryClient = null;
	if($_SESSION["user_name"] != ""){ 
		$queryClient = mysql_query("SELECT * from usuario");
		$num_rows_client = mysql_num_rows($queryClient); //numero de filas retornadas
		if($num_rows_client >= 0){
			$result_client = mysql_fetch_array($queryClient);
			$i = 1;
				while ($row = mysql_fetch_row($queryClient)) {						       
					echo $row[0];
					echo $row[1];
					echo $row[2];
					echo $row[4];
					$i++;
				}						            										
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>

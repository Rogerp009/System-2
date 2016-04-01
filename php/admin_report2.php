<?php
	require_once 'funciones_db.php';

	session_start();

	$db = new funciones_BD();
	$queryClient = null;
	$queryProduct = null;
	$cedula = $_SESSION["user_cedula"];
	//Var
	if($_SESSION["user_name"] != ""){ 		
		$queryPedido = mysql_query("SELECT COUNT(*) from orden_compra WHERE cedula_cliente = $cedula");	

		$num_rows_pedido = mysql_num_rows($queryPedido); //numero de filas retornadas	
		if($num_rows_pedido >= 0){
			$result_pedido = mysql_fetch_array($queryPedido);
		}

		$array_validate = array("pedido"=> $result_pedido[0]);
		echo json_encode($array_validate);
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>

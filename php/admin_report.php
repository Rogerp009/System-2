<?php
	require_once 'funciones_db.php';

	session_start();

	$db = new funciones_BD();
	$queryClient = null;
	$queryProduct = null;

	//Var
	if($_SESSION["user_name"] != ""){ 
		$queryClient = mysql_query("SELECT COUNT(*) from usuario");
		$queryProduct = mysql_query("SELECT COUNT(*) from producto");
		$queryCamion = mysql_query("SELECT COUNT(*) from camion");		
		$queryPedido = mysql_query("SELECT COUNT(*) from orden_compra");	

		$num_rows_client = mysql_num_rows($queryClient); //numero de filas retornadas
		$num_rows_product = mysql_num_rows($queryProduct); //numero de filas retornadas
		$num_rows_camion = mysql_num_rows($queryCamion); //numero de filas retornadas
		$num_rows_pedido = mysql_num_rows($queryPedido); //numero de filas retornadas	

		if($num_rows_product >= 0){
			$result_product = mysql_fetch_array($queryProduct);
		}
		if($num_rows_client >= 0){
			$result_client = mysql_fetch_array($queryClient);
		}
		if($num_rows_camion >= 0){
			$result_camion = mysql_fetch_array($queryCamion);
		}

		if($num_rows_pedido >= 0){
			$result_pedido = mysql_fetch_array($queryPedido);
		}

		$array_validate = array("cliente" => $result_client[0], "producto" =>$result_product[0], "camion"=> $result_camion[0], "pedido"=> $result_pedido[0]);
		echo json_encode($array_validate);
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>

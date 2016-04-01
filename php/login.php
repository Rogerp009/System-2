<?php
	require_once 'funciones_db.php';
	$db = new funciones_BD();
	ob_start();
	session_start(); // Starting Session	
	if(!isset($_SESSION))session_start();
	if (isset($_POST['action']) == "validate"){//isset($_POST['action']) == "validate"
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username != "" && $password != ""){
	   		$query = mysql_query("SELECT nombre, apellido, cedula, fecha, username, email, rol FROM usuario WHERE username = '$username' AND password = '$password' "); 
	        $num_rows = mysql_num_rows($query); //numero de filas retornadas
	        if ($num_rows > 0) {
	        	$result = mysql_fetch_array($query);
				$_SESSION['user_name'] = $username;
				$_SESSION['user_password'] = $password;
				$_SESSION['user_role'] = $result['rol'];
				$_SESSION['user_nombre'] = $result['nombre'];
				$_SESSION['user_apellido'] = $result['apellido'];
				$_SESSION['user_cedula'] = $result['cedula'];								
				$_SESSION['user_fecha'] = $result['fecha'];							
				$_SESSION['user_acceso'] = date('Y-n-j H:i:s');					           

				if($result['rol'] == "Cliente"){
					$_SESSION['role'] = "roles/usuario/cliente.php";					
					$array_validate = array("respuesta" => 1, "role" =>$result['rol']);
					echo json_encode($array_validate);	
				}else{
					if($result['rol'] == "Administrador"){
						$_SESSION['role'] = "roles/admin/administrador.php";						
						$array_validate = array("respuesta" => 2, "role" =>$result['rol']);
						echo json_encode($array_validate);
					}else{
						if($result['rol'] == "Secretaria"){
							$_SESSION['role'] = "roles/secretaria/secretaria.php";
							$array_validate = array("respuesta" => 3, "role" =>$result['rol']);							
							echo json_encode($array_validate);
						}else{
							if($result['rol'] == "Chofer"){
								$_SESSION['role'] = "roles/chofer/chofer.php";								
								$array_validate = array("respuesta" => 4, "role" =>$result['rol']);
								echo json_encode($array_validate);
							}
						}
					}
				}
	        } else {
				$array_validate = array("respuesta" => -1, "role" => "ND");
				echo json_encode($array_validate);	           
	        }	
		}else{
			$array_validate = array("respuesta" => 0, "role" => "ND");
			echo json_encode($array_validate);	 
		}				
	}
?>

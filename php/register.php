<?php
	//Post
	require_once "funciones_db.php";
	$db = new funciones_BD();

	if(isset($_POST["telefono"]) ||isset($_POST["direccion"]) ||isset($_POST["nombre"]) 
		||isset($_POST["apellido"]) ||isset($_POST["cedula"]) ||isset($_POST["email"]) 
		||isset($_POST["username"]) || isset($_POST["password"]) ){

		$nombre = $_POST['nombre']; 
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$direccion = $_POST['direccion'];
		$fecha = date('Y-m-d H:i:s');
		$fecha_modificacion = date('Y-m-d H:i:s');
		$rol = "Cliente";

        $result = mysql_query("INSERT INTO usuario(nombre, apellido, cedula, fecha, rol, fecha_modificacion, direcion, telefono, username, password, email) 
                               VALUES('$nombre', '$apellido', $cedula, '$fecha', '$rol', '$fecha_modificacion', '$direccion', '$telefono', '$username', '$password', '$email')");
        if ($result) {
            echo 1;
        } else {
        	if(!$result)
            echo 0;
        }		
	}else{
		echo -1;
	}
?>
<?php
 
class funciones_BD {
 
    private $db;
    function __construct() {
        require_once 'conexion.php';
        $this->db = new Connect();
        $this->db->connect();

    }
 
    // destructor
    function __destruct() {
 
    }
 
    /**
     * agregar nuevo usuario
     */
    public function addUser($nombre, $apellido, $cedula, $telefono, $fecha, $rol, $fecha_modificacion, $direccion, $username, $password, $email) {

        $result = mysql_query("INSERT INTO usuario(nombre, apellido, cedula, fecha, rol, fecha_modificacion, direcion, telefono, username, password, email) 
                               VALUES('$nombre', '$apellido', $cedula, '$fecha', '$rol', '$fecha_modificacion', '$direccion', '$telefono', '$username', '$password', '$email')");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }//end method
 
    public function addUserAdmin($nombre, $apellido, $cedula, $direccion, $rol, $fecha, $fecha_modificacion, $username, $password, $email) {

    $result = mysql_query("INSERT INTO usuario(nombre,apellido,cedula,fecha,rol,fecha_modificacion,direcion,username,password,email) 
                           VALUES('$nombre', '$apellido', $cedula, '$username', '$password', '$email')");

        if ($result) {
            return true;
        } else {
            return false;
        }
    }//end method 
     /**
     * Verificar si el usuario ya existe por el nombre de usuario
     */

    public function userExist($username) {
        $resultado = mysql_query("SELECT username from usuario WHERE username = '$username'");
        $num_rows = mysql_num_rows($resultado); //numero de filas retornadas
        if ($num_rows > 0) {
            return true; //exit
        } else {
            return false; //not exit
        }
    }//end method
 
   
    public function login($username, $password){
       $result = mysql_query("SELECT COUNT(*) FROM usuario WHERE username = '$username' AND password = '$password' "); 
       $count = mysql_fetch_array($result);
        if ($count[0] > 0  ){
          return true;
        }else{
          return false;
        }
    }

    public function validateEmail($email){
        $resultado = mysql_query("SELECT email from usuario WHERE email = '$email'");
        $num_rows = mysql_num_rows($resultado); //numero de filas retornadas
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }//end method

    public function validateCedula($cedula){
        $resultado = mysql_query("SELECT cedula from usuario WHERE cedula = '$cedula'");
        $num_rows = mysql_num_rows($resultado); //numero de filas retornadas
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }//end method

    public function validateNombre($nombre){
        $resultado = mysql_query("SELECT * from producto WHERE nombre = '$nombre'");
        $num_rows = mysql_num_rows($resultado); //numero de filas retornadas
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }//end method

    public function validateMatricula($matricula){
        $query = mysql_query("SELECT * from camion WHERE maticula = '$matricula'");
        $num_rows = mysql_num_rows($query); //numero de filas retornadas
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }//end method

    public function validateNumero($numero){
        $query = mysql_query("SELECT * from camion WHERE numero = '$numero'");
        $num_rows = mysql_num_rows($query); //numero de filas retornadas
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }//end method    

    public function perfil($username){
        $query = mysql_query("SELECT * from usuario WHERE username = '$username'");
        $num_rows = mysql_num_rows($query); //numero de filas retornadas
        if ($num_rows > 0) {
            return mysql_fetch_array($query);
        } else {
            return null;
        }
    }//end method    

    public function updateEmail($email, $username){
        $query = mysql_query(" UPDATE usuario SET email = '$email' WHERE username = '$username' ");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }//end method


    public function updatePass($password, $username){
        $query = mysql_query(" UPDATE usuario SET password = '$password' WHERE username = '$username' ");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }//end method

    public function addProducto($nombre, $tipo, $presentacion, $fecha, $precio, $precio_caja){
        $result = mysql_query("INSERT INTO producto(nombre_producto, tipo, presentacion, fecha_producto, precio, precio_caja) 
                               VALUES('$nombre', '$tipo', '$presentacion', '$fecha', $precio, $precio_caja)");
            if ($result) {
                return true;
            } else {
                return false;
            }
    }//end method


    public function addCamion($matricula, $marca, $modelo, $fecha){
        $result = mysql_query("INSERT INTO camion(maticula, marca, modelo, fecha) 
                               VALUES('$matricula', '$marca', '$modelo', '$fecha')");
            if ($result) {
                return true;
            } else {
                return false;
            }
    }//end method

    public function updateProducto($nombre, $codigo_producto){
        $query = mysql_query(" UPDATE usuario SET password = '$password' WHERE codigo_producto = '$codigo_producto' ");
            if ($result) {
                return true;
            } else {
                return false;
            }
    }//end method

     public function countUser(){
        $query = mysql_query("SELECT COUNT(*) from usuario");
        $num_rows = mysql_num_rows($query); //numero de filas retornadas
        if ($num_rows > 0) {
            return mysql_fetch_array($query);
        } else {
            return 0;
        }
    }//end method  

     public function reservas(){
        $query = mysql_query("SELECT * 
FROM usuario C, orden_compra O, producto_orden X, producto Z
WHERE C.cedula = O.cedula_cliente
AND O.codigo_orden = X.codigo_orden
AND Z.codigo_producto = X.codigo_producto ");
        $num_rows = mysql_num_rows($query); //numero de filas retornada
        if ($num_rows > 0) {
            return $query;
        } else {
            return 0;
        }
    }//end method  

    
    public function addProduccion($codigo, $cajas, $cantidad_unidad, $fecha_nueva){
        $result = mysql_query("INSERT INTO produccion(codigo_producto, cantida_caja, cantidad_unidad, fecha_produccion) 
                               VALUES($codigo, $cajas, $cantidad_unidad, '$fecha_nueva')");

            if ($result) {
                return true;
            } else {
                return false;
            }
    }//end method

    function ADDstock($codigo, $cajas, $cantidad_unidad, $fecha_nueva){
        $result = mysql_query("INSERT INTO stock(codigo_producto, caja_disponibles, unidad_disponible, fecha_stock) VALUES($codigo, $cajas, $cantidad_unidad, '$fecha_nueva')");                          


            if ($result) {
                return true;
            } else {
                return false;
            }             
    }//end method

    function AddStock0($codigo, $cajas, $cantidad_unidad){ 
        $fecha = date("Y-m-d H:i:s");       
        $sumarCaja = mysql_query("SELECT $cajas + sum(caja_disponibles) FROM stock WHERE codigo_producto = $codigo");
        $sumarUnidad = mysql_query("SELECT $cantidad_unidad + sum(unidad_disponible) FROM stock WHERE codigo_producto = $codigo");
        $countCaja = mysql_fetch_array($sumarCaja);                
        $countUnidad = mysql_fetch_array($sumarUnidad);
        $updateCaja = mysql_query("UPDATE stock SET caja_disponibles = $countCaja[0], fecha_stock = '$fecha' WHERE codigo_producto = $codigo");
        $updateUnida = mysql_query("UPDATE stock SET unidad_disponible = $countUnidad[0], fecha_stock = '$fecha' WHERE codigo_producto = $codigo");  

        if($updateCaja && $updateUnida){
            return true;
        }else{
            return false;
        }
    }//end method


    function validateOrden($orden_compra){
        $query = mysql_query("SELECT COUNT(*) from orden_compra WHERE codigo_orden = '$orden_compra'");
        $count = mysql_fetch_array($query);
        if ($count[0] > 0  ){
          return true;
        }else{
          return false;
        }        
    }
}//end class
 
?>


<?php
 
class Connect {
 
    // constructor
    function __construct() {
 
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    // Connectar con base de datos
    public function connect() {
        require_once 'config.php';
        // connectar con mysaql
        $db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecionar la base de dato
        mysql_select_db(DB_DATABASE);
    
        // retornar la database handler
        return $db;
    }
 
    // Cerrar la base de dato
    public function close() {
        mysql_close();
    }
 
}
?>

<?php
    //Post
    require_once "funciones_db.php";

    session_start();

    //Var
    if($_SESSION["user_name"] == ""){ 
        header("Location:/../session.php"); //Redirecionar a session
        //require_once("php/destroy_session.php");
    }else{




        
        /**
        if(empty($_POST["cajas"]) || empty($_POST["cantidad_unidad"])|| empty($_POST["fecha_nueva"])|| empty($_POST["codigo"])){//agregar prdocuto o modificar el prodcuto tag
            echo -1;
        }else{      
            $cajas = $_POST["cajas"];
            $cantidad_unidad = $_POST["cantidad_unidad"];
            $fecha_nueva = $_POST["fecha_nueva"];           
            $codigo = $_POST["codigo"];
            $query = mysql_query("SELECT COUNT(*) FROM stock WHERE codigo_producto = $codigo");    
            $num_rows = mysql_num_rows($query); //numero de filas retornadas //verificar si hay algo
            if($num_rows == 0){ //si tiene algo, si esta vacio ingeso por primera vez
                $void = mysql_query("INSERT INTO stock(codigo_producto, caja_disponibles, unidad_disponible, fecha_stock) VALUES($codigo, $cajas, $cantidad_unidad, '$fecha_nueva')");
                if($void){
                    echo 1;
                }else{
                    echo 0;
                }
            }else{//hay registro
                $sumarCaja = mysql_query("SELECT $cajas + sum(caja_disponibles) FROM stock WHERE codigo_producto = $codigo");
                $sumarUnidad = mysql_query("SELECT $cantidad_unidad + sum(unidad_disponible) FROM stock WHERE codigo_producto = $codigo");
                $countCaja = mysql_fetch_array($sumarCaja);                
                $countUnidad = mysql_fetch_array($sumarUnidad);
                $updateCaja = mysql_query("UPDATE stock SET caja_disponibles = $countCaja[0] WHERE codigo_producto = $codigo");
                $updateUnida = mysql_query("UPDATE stock SET unidad_disponible = $countUnidad[0] WHERE codigo_producto = $codigo");
                if($updateUnida && $updateCaja){
                    echo 1;
                }else{
                    echo 0;
                }
            }                       
                                            
        }
        */
    }
?>
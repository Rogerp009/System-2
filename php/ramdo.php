<?php

# Ejemplo para generar un número y letra y mostrarlo
# Cortesía de EjemploDe.com

function randomText($length) {
    $pattern = "1234567890ABCDEFGHIJKMNLOPQRSTUVWXYZ";
    $key = "";
    for($i = 0; $i < $length; $i++) {
        $key .= $pattern{rand(0, 35)};
    }
    return $key;
}  

	echo randomText(20);

?>

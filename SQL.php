<?php
include 'Heroe.php';
echo hola;
$mysqli =  mysqli_connect('locahost', 'asier', 'asier', 'Heroes');

    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
Class DB{
    
}
?>
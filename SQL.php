<?php
include 'Heroe.php';
echo hola;
$mysqli =  mysqli_connect('192.168.1.143', 'asier', 'asier', 'Heroes');

    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
Class DB{
    function Mensaje(){
    $resultado = $mysqli->query("SELECT '¡Hola, querido usuario de MySQL!' AS _message FROM DUAL");
$fila = $resultado->fetch_assoc();}
}
?>
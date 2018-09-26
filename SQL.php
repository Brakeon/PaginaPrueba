<?php
//include 'Heroe.php';
echo hola;
$mysqli =  mysqli_connect('192.1868.1.143', 'asier', 'asier', 'Superheroes');

    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
Class DB{
    function Consulta(){
        $resultado = $mysqli->query("SELECT * FROM Heroes");
        $fila = $resultado->fetch_assoc();
        return $fila;
    }

    function InsertHeroe(){

    }
}
?>
<?php
//include 'Heroe.php';
echo holas;
$mysqli =  mysqli_connect('localhost', 'asier', 'asier', 'Superheroes',3306);

    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
Class DB{
    public function __construct(){

    }
    function Consulta(){
        $resultado = $mysqli->query("SELECT * FROM Heroes");
       // $fila = $resultado->fetch_assoc();
        return $resultado;
    }

    function InsertHeroe(){

    }
}
?>
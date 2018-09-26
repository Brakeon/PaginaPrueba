<?php
//include 'Heroe.php';
echo holas;

class DB
{
    public function iniciar()
    {
        
    }
    public function __construct()
    {
        $mysqli = mysqli_connect('localhost', 'asier', 'asier', 'Superheroes', 3306);

        if (!$mysqli) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }
    public function Consulta()
    {
        $resultado = $mysqli->query("SELECT * FROM Heroes");
        // $fila = $resultado->fetch_assoc();
        return $resultado;
    }

    public function InsertHeroe()
    {

    }
}

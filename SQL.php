<?php
//include 'Heroe.php';
echo holas;

function conectarSQL()
{
    $mysqli = mysqli_connect('localhost', 'asier', 'asier', 'Superheroes', 3306);

    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $mysqli;
}

function Consulta($mysqli)
{
    $resultado = $mysqli->query("SELECT * FROM Heroes");
    $user = mysqli_fetch_assoc($resultado);
    return $resultado;
}

/*class DB
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
exit;}
}
public function Consulta($mysqli)
{
$resultado = $mysqli->query("SELECT * FROM Heroes");
$user = mysqli_fetch_assoc($resultado);
return $user;
}

public function InsertHeroe()
{

}
}*/

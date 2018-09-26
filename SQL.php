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

function Consulta( /*$mysqli*/)
{
    $mysqli= conectarSQL();
    if(!$mysqli){
        echo "no hay na";
    }
    $resultado = $mysqli->query("SELECT * FROM Heroes");
    
    $array = mysqli_fetch_assoc($resultado);
    return $array;
    cerrarConexion();
}

function InsertHeroeSQL(/*$mysqli,*/ $nombre, $fecha, $poderes, $bio, $universo)
{
    $mysqli= conectarSQL();
    if ($mysqli->query("INSERT INTO Heroes (nombre, fecha, poderes, bio, universo) VALUES ('" . $nombre . "', '" . $fecha . "', '" . $poderes . "', '" . $bio . "', '" . $universo . "'); ") === true) {
        echo "Hecho!";
    } else {
        echo "Error: " . $mysqli->error;
    }
    cerrarConexion();
}

function CargarHeroesSQL()
{
    $mysqli= conectarSQL();
    if(!$mysqli){
        echo "no hay na";
    }
    $resultado = $mysqli->query("SELECT nombre, fecha, poderes, bio, universo FROM Heroes");
    
    $array = mysqli_fetch_assoc($resultado);
    return $array;
    cerrarConexion();
}

function cerrarConexion()
{
    mysqli_close();
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

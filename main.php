<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
 <body>

 <?php
include 'Heroe.php';
include 'SQL.php';

//$mysqli = conectarSQL();

$hulk = new Heroe("Hulk", 1962, "fuerza", "...", "marvel");
$spiderman = new Heroe("Spiderman", 1962, "sentido arácnido", "...", "marvel");
$superman = new Heroe("Superman", 1933, "fuerza", "...", "dc");
$batman = new Heroe("Batman", 1939, "ninguno", "...", "dc");

$arrayHeroe = array($hulk, $spiderman, $superman, $batman);

//$arrayHeroe=CargarHeroesSQL();
/*foreach ($arraySQL as $ObjSQL){
if ($ObjSQL!=null){
array_push($arrayHeroe, $ObjSQL);
}}*/

$arrayHeroe[sizeof($arrayHeroe) + 1] = new Heroe("Deadpool", 1991, "Curación", "...", "marvel");

echo "<h1>hola\n</h1>";
//echo $batman->ComprobarUniverso();
//$db= new DB();
echo "<h1>holasss\n</h1>";

$arrayBD = Consulta( /*$mysqli*/);

foreach ($arrayBD as $key => $value) {
    echo "<p>$value</p>";
}
//InsertHeroeSQL( "Superpiderman", 2018, "cansino", "....", "matutano");

foreach ($arrayHeroe as $heroe) {

    //InsertHeroeSQL( $heroe->nombre, $heroe->fecha, $heroe->poderes, $heroe->bio, $heroe->universo);
    ?>
    <div class="card" style="width: 18rem;">
   <!-- <img class="card-img-top" src=".../cards/.jpg" alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title"><?php echo $heroe->nombre ?></h5>
            <p class="card-text">Año de aparición: <?php echo $heroe->fecha ?></p>
            <p class="card-text">Poderes: <?php echo $heroe->poderes ?></p>
            <p class="card-text">Biografía: <?php echo $heroe->bio ?></p>
            <img class="card-img-top" src="cards/<?php echo $heroe->ComprobarUniverso() ?>" alt="Card image cap" style="max-height: 75px; width:auto;">
           <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
   <?php
}
?>
<iframe src="https://embed.spotify.com/?uri=spotify:artist:711MCceyCBcFnzjGY4Q7Un" width="300" height="250">
</iframe>
</body>
</html>
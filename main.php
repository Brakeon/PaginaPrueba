<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php
include 'Heroe.php';

$hulk = new Heroe("Hulk", 1962, "fuerza", "...", "marvel");
$spiderman = new Heroe("Spiderman", 1962, "sentido arácnido", "...", "marvel");
$superman = new Heroe("Superman", 1933, "fuerza", "...", "dc");
$batman = new Heroe("Batman", 1939, "ninguno", "...", "dc");

$arrayHeroe = array($hulk, $spiderman, $superman, $batman);

$arrayHeroe[sizeof($arrayHeroe) + 1] = new Heroe("Deadpool", 1991, "Curación", "...", "marvel");

echo "<h1>hola\n</h1>";

foreach($arrayHeroe as $heroe){
    echo "<h2>".$heroe->nombre."</h2>";
}
?>

</body>
</html>
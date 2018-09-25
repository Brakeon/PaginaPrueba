<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    echo $heroe->nombre;
    echo "<h2>".$heroe->nombre."</h2>";
    ?>
    <div class="card-deck">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $heroe->nombre ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
   <?php
}
?>

</body>
</html>
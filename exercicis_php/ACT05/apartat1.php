<?php
declare(strict_types = 1);

function capcalera(){
  echo "<header>
          <h1>Botiga coloradeishon</h1>
            <p>botiga de noseque</p>
        </header>";
}

function peu(){
  echo "<footer>Botiga coloradeishon - " . date('Y') . "</footer>";

}

/*Com que aquesta funció no es cridada en cap moment al html no es mostra res en pantalla */
function noCridar(){
  echo "no llamar a esta funcion";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php capcalera()?>

  <?php peu()?>
  <?php peu()?>
  <?php peu()?>
</body>
</html>
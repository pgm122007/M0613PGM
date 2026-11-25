<?php


/*
* PAS 2 - Recoger los datos correctamente
*
*/
/*Trim: para sacar los espacios y inicializar si la variable venía vacia*/
$nombre   = trim($_POST['nombre'] ?? '');
$correo   = trim($_POST['correo'] ?? '');
$dia      = trim($_POST['dia'] ?? 'sense triar');

echo "<p>Hola," .$nombre. "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Dades recollides</h1>

  <ul>
    <li>Nombre: <?= $nombre?></li>
    <li>Correo: <?= $correo?></li>
    <li>Dia: <?= $dia?></li>
  </ul>

  <p>El nom té <?= strlen($nombre)?> caracterés</p>

</body>
</html>
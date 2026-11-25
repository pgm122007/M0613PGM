<?php

/*
* PAS 3 - Una sola pagina 
* Fins ara teniem dos fitxers, el formulari i els resultats
* Mira com es fa la peticio i aixi fara una cosa u altre
* La primera visita es amb GET i quean es prem el botò
* d'enviar es amb POST
*/

$nom = '';
$correu = '';
$validar_correo = '';
$direccion = '';
$telefono = '';
$dia = '';
// var de control
$enviat = false;

// Array predefinico $_SERVER nos da informacioón del
// servidor
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// Si el request method es POST es que ya se ha
// clicado al boton de enviar del formulario
// con method = post
if($_SERVER['REQUEST_METHOD'] === "POST"){
  $nombre   = trim($_POST['nombre'] ?? '');
  $correo   = trim($_POST['correo'] ?? '');
  $validar_correo   = trim($_POST['correo'] ?? '');
  $direccion   = trim($_POST['correo'] ?? '');
  $telefono   = trim($_POST['correo'] ?? '');
  $dia      = trim($_POST['dia'] ?? 'sense triar');
  $enviat = true;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripcio al Festival</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inscripació al Festival</h1>
    <?php if($enviat):?>
      <p>Inscripcio rebuda <?= $nombre;?>
      (<?= $correo?>), dia <?=$dia ?> .</p>
      <?php endif;?>

    <!--<form action="pas3-resultat.php"></form>-->
    <form action="pas3-resultat.php">

      <label for="name">Nombre</label>
    <input type="nombre" name="nombre">

    <label for="correo">Correo</label>
    <input type="correo" name="correo" type="email">

    <label for="correo">Confirmar correo</label>
    <input type="correo" name="correo" type="email">

    <label for="correo">Direccion</label>
    <input type="direccion" name="direccion" type="email">

    <label for="correo">Telefono</label>
    <input type="telefono" name="correo" type="email">

    <label for="dia">Dia</label>
    <select name="dia" id="dia">
      <option value="viernes">Viernes</options>
      <option value="sabado">Sabado</option>
    </select>

    <button>Inscribirme</button>

    </form>

</body>
</html>
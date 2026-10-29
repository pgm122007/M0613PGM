<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  echo '<p>Has d\'arrivar aqui desde el formulari.';
  echo '<a href="registre.html">Torna-hi</a></p>';
  exit;
}

// Les dades del formulari

$usuari = [
  'nom'             => trim($_POST['nom'] ?? ''),
  'cognom'          => trim($_POST['cognom'] ?? ''),
  'naixement'       => trim($_POST['naixement'] ?? ''),
  'correu'          => trim($_POST['correu'] ?? ''),
  'usuari'          => trim($_POST['usuari'] ?? ''),
  'correu'          => trim($_POST['correu'] ?? ''),
  'carrer'          => trim($_POST['carrer'] ?? ''),
  'poblacio'        => trim($_POST['poblacio'] ?? ''),
  'codiPostal'      => trim($_POST['codiPostal'] ?? ''),
  'tipusClient'     => trim($_POST['tipusClient'] ?? ''),
  'origen'          => trim($_POST['origen'] ?? ''),
  'bulleti'         => trim($_POST['bulleti'] ?? ''),
];

$contrasenya = $_POST['contrasenya']?? '';
$confContrasenya = $_POST['confContrasenya']?? '';

$errors = [];

if($usuari['nom'] === ''){
  $errors[] = 'el nom es obligatori.';
}

if($usuari['correu'] === ''){
  $errors[] = 'el correu es obligatori.';
}elseif(filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === FALSE ){
  $errors[] = 'El correu no te un format valid.';
}

if($usuari['usuari'] === ''){
  $errors[] = 'el nom d\'usuari es obligatori.';
}elseif(strlen($usuari['usuari']) < 4){
  $errors[] = 'El nom ha de tenir un minim de 4 caracters.';
}

if($contrasenya === ''){
  $errors[] = 'la contrasenya es obligatoria.';
}elseif(strlen($contrasenya) < 6){
  $errors[] = 'El nom ha de tenir un minim de 6 caracters.';
}

if($confContrasenya === ''){
  $errors[] = 'no s\'ha confirmat la contrasenya.';
}

if($confContrasenya !== $contrasenya){
  $errors[] = 'les contrasenyas no coincideixen.';
}

if($usuari['codiPostal'] !== '' && strlen($usuari['codiPostal']) != 5){
    $errors[] = "El codi postal ha de tenir exactament 5 xifres.";
}

if($usuari['tipusClient'] === ''){
  $errors[] = 'no s\'ha escollit el tipus de client.';
}

if(isset($_POST['condicions'])){
  $errors[] = 'Has d\'acceptar les condicions.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link ref="stylesheet" href="estils.css">
</head>
<body>
  <?php if(count($errors) > 0):?>
    
    <h2>No s'ha pogut crear el compte</h2>
    <ul>
      <?php foreach ($errors as $error):?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
    </ul>

  <?php else: ?>

    <h1>Benvingut <?= htmlspecialchars($usuari['nom']) ?> <?= htmlspecialchars($usuari['cognom']) ?></h1>
    <p>El teu correu és: <?= htmlspecialchars($usuari['correu']) ?></p>
    <table>
        <tr>
            <th>Camp</th>
            <th>Valor</th>
        </tr>
        <?php foreach ($usuari as $camp => $valor): ?>
            <tr>
                <td><?= htmlspecialchars($camp) ?></td>
                <td><?= htmlspecialchars($valor) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>
  
</body>
</html>
<?php
require_once 'config.php';
require_once 'funcions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $titolPagina = 'Acces directe';
    require 'header.php';
    echo '<h2>Aqui no s\'hi arriba directament</h2>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';
    require 'footer.php';
    exit;
}

$usuari = [
    'nom'         => camp('nom'),
    'cognom'      => camp('cognom'),
    'naixement'   => camp('naixement'),
    'telefon'     => camp('telefon'),
    'usuari'      => camp('usuari'),
    'correu'      => camp('correu'),
    'carrer'      => camp('carrer'),
    'poblacio'    => camp('poblacio'),
    'codiPostal'  => camp('codiPostal'),
    'tipusClient' => camp('tipusClient'),
    'origen'      => camp('origen', 'no ho ha dit'),
    'bulleti'     => casella('bulleti') ? 'Si' : 'No',
];

$contrasenya     = $_POST['contrasenya'] ?? '';
$confContrasenya = $_POST['confContrasenya'] ?? '';
$condicions      = casella('condicions');

$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom es obligatori.';
}

if ($usuari['correu'] === '') {
    $errors[] = 'El correu es obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no te un format valid.';
}

if ($usuari['usuari'] === '') {
    $errors[] = 'El nom d\'usuari es obligatori.';
} elseif (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir un minim de ' . MIN_USUARI . ' caracters.';
}

if ($contrasenya === '') {
    $errors[] = 'La contrasenya es obligatoria.';
} elseif (strlen($contrasenya) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir un minim de ' . MIN_CLAU . ' caracters.';
}

if ($confContrasenya === '') {
    $errors[] = 'No s\'ha confirmat la contrasenya.';
} elseif ($confContrasenya !== $contrasenya) {
    $errors[] = 'Les contrasenyes no coincideixen.';
}

if ($usuari['codiPostal'] !== '' && !preg_match('/^[0-9]{5}$/', $usuari['codiPostal'])) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if ($usuari['tipusClient'] === '') {
    $errors[] = 'No s\'ha escollit el tipus de client.';
}

if (!$condicions) {
    $errors[] = 'Has d\'acceptar les condicions.';
}

$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require 'header.php';
?>

<?php if (count($errors) > 0): ?>

  <h2>No s'ha pogut crear el compte</h2>
  <ul class="errors">
    <?php foreach ($errors as $error): ?>
      <li><?= esc($error) ?></li>
    <?php endforeach; ?>
  </ul>
  <a class="tornar" href="<?= PAG_FORMULARI ?>">Torna al formulari</a>

<?php else: ?>

  <h2>Benvingut <?= esc($usuari['nom']) ?> <?= esc($usuari['cognom']) ?></h2>
  <p>El teu correu és: <?= esc($usuari['correu']) ?></p>
  <table>
    <?php foreach ($usuari as $clauCamp => $valor): ?>
      <tr>
        <th><?= etiqueta($clauCamp) ?></th>
        <td><?= esc($valor) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <a class="tornar" href="gracies.php">Continuar</a>

<?php endif; ?>

<?php
require 'footer.php';

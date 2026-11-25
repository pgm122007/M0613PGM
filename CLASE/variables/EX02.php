<?php

  const IVA = 0.21;
  $producte = 'Teclat';
  $base = 79.90;
  $estoc = 4;

  $nom =  'Pau';
  $cognom = 'Garcia';
  $direccio = 'Av. can Pallars';

  //funcion predeterminada para redondear 2 decimales round
  $total = round($base * (1+IVA), 2);

?>

<h2><?php echo $producte ?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p> Disponibilitat: <?= $estoc ?></p>

<h2>Dades personals</h2>

<p>Nom: <?= $nom?></p>
<p>Cognom: <?= $cognom?></p>
<p>Direccion: <?= $direccio?></p>
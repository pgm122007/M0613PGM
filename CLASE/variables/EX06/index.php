<?php
const IVA = 0.21;
const BOTIGA = 'TIENDA TUPOIA';
const MONEDA = "€";
const DESCOMPTE_SOCI = 0.10;

$producte = 'Camiseta demierda';
$unidades = 5;
$preu = 99.00;
$referencia = 'CAM-1425376';
$total = round($preu * (1+IVA), 2);
$descompte = round($total/ (1+DESCOMPTE_SOCI), 2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= BOTIGA?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?= BOTIGA?></h1>
    <p>Esto es <?= BOTIGA?></p>
  </header>
  <main>
    <article>
      <p class="descripcion"><?= $producte;?></p>
      <p class="preu">Preu sense IVA: <?= number_format($preu, 2)?><?= MONEDA?></p>
      <p class="preu">IVA: <?=number_format(IVA *100, 0)?>%</p>
      <p class="preu">Descompte de soci: <?=number_format(DESCOMPTE_SOCI*100, 0)?>%</p>
      <p class="total">TOTAL: <?=number_format($descompte, 2)?><?= MONEDA ?></p>
      <p class="estoc">Unitats disponibles: <?= $unidades?></p>
      <p class="ref"><?= $referencia?></p>
    </article>
  </main>

  <footer>
      <p>footer de <?= BOTIGA?> S.L</p>
  </footer>
</body>
</html>
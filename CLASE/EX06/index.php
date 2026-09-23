<?php
$preu = 99.00;
const IVA = 0.21;

$total = round($preu * (1+IVA), 2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda online</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tienda online GUAY</h1>
    <p>Esto es una tienda online guay</p>
  </header>
  <main>
    <article>
      <p class="descripcion">Camiseta chupi chupi guay</p>
      <p class="preu">Preu sense IVA: <?= $preu;?>.00</p>
      <p class="preu">IVA (21%): MUCHO</p>
      <p class="total">TOTAL: <?= $total;?> EUR</p>
      <p class="estoc">Unitats disponibles: 5</p>
      <p class="ref">CAM-1425376</p>
    </article>
  </main>

  <footer>
      <p>footer de la chienda cupi guat S.L</p>
  </footer>
</body>
</html>
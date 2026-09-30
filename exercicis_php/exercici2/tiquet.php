<?php

const IVA = 0.21;

$botiga = 'Tienda Molona';

$producte = 'Productos to flama';

$preu = 34.90;
$unitats = 2;

$subtotal = $preu * $unitats;
$importIva = $subtotal * IVA;
$total = $subtotal + $importIva;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiquet</title>
</head>
<body>
    <h1><?php echo $botiga ?></h1>

    <p>Producte: <?= $producte?></p>
    <p>Unitats: <?= $unitats?></p>

    <?php 
    echo '<p>Preu unitari: ' . $preu . ' EUR</p>';
    echo "<p>Subtotal: $subtotal EUR</p>";
    ?>

    <p>IVA: <?= $importIva?> EUR</p>
    <p>Total: <?= $total ?> EUR</p>

</body>
</html>
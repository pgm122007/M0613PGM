<?php
declare(strict_types=1);

$productes = [
    ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats',
     'preu' => 79.90, 'estoc' => 4],
    ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins',
     'preu' => 29.95, 'estoc' => 7],
    ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors',
     'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC', 'categoria' => 'audio',
     'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris',
     'preu' => 34.90, 'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris',
     'preu' => 24.50, 'estoc' => 0],
];

// EXERCICI 1

function valorEstoc(array $productes): float
{
    $total = 0.0;
    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }
    return round($total, 2);
}

function quantsEsgotats(array $productes): int
{
    $esgotats = 0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $esgotats++;
        }
    }
    return $esgotats;
}

function preuMitja(array $productes): float
{
    if (count($productes) === 0) {
        return 0.0;
    }

    $total = 0.0;
    foreach ($productes as $item) {
        $total += $item['preu'];
    }
    return round($total / count($productes), 2);
}

// EXERCICI 2

function nomesDisponibles(array $productes): array
{
    $ambEstoc = [];
    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $ambEstoc[] = $item;
        }
    }
    return $ambEstoc;
}

function elMesCar(array $productes): array
{
    if (count($productes) === 0) {
        return [];
    }

    $mesCar = $productes[0];
    foreach ($productes as $item) {
        if ($item['preu'] > $mesCar['preu']) {
            $mesCar = $item;
        }
    }
    return $mesCar;
}

function resumCataleg(array $productes): array
{
    return [
        'total'       => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car'     => elMesCar($productes),
    ];
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h2>Exercici 1</h2>
    <p>Valor de l'estoc: <?= valorEstoc($productes) ?> EUR</p>
    <p>Esgotats: <?= quantsEsgotats($productes) ?></p>
    <p>Preu mitjà: <?= preuMitja($productes) ?> EUR</p>
    <p>Preu mitjà d'un array buit: <?= preuMitja([]) ?></p>

    <h2>Exercici 2: resum</h2>
    <ul>
    <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
        <li>
            <?php if (is_array($valor)): ?>
                <?= $clau ?>: <?= htmlspecialchars($valor['nom']) ?> (<?= $valor['preu'] ?> EUR)
            <?php else: ?>
                <?= $clau ?>: <?= $valor ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
</main>
</body>
</html>
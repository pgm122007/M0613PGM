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

function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

function estatEstoc(int $estoc): string
{
    if ($estoc === 0) {
        return 'Esgotat';
    }
    if ($estoc <= 3) {
        return 'Últimes unitats';
    }
    return 'Disponible';
}

function classeEstat(string $estat): string
{
    return match ($estat) {
        'Esgotat'         => 'esgotat',
        'Últimes unitats' => 'ultimes',
        default           => 'disponible',
    };
}

function filtraCategoria(array $productes, string $categoria = 'totes'): array
{
    if ($categoria === 'totes') {
        return $productes;
    }

    $res = [];
    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $res[] = $item;
        }
    }
    return $res;
}

function resumCataleg(array $productes): array
{
    $resum = ['total' => count($productes), 'disponibles' => 0,
              'esgotats' => 0, 'valor_estoc' => 0.0];

    foreach ($productes as $item) {
        if (estatEstoc($item['estoc']) === 'Esgotat') {
            $resum['esgotats']++;
        } else {
            $resum['disponibles']++;
        }
        $resum['valor_estoc'] += $item['preu'] * $item['estoc'];
    }
    return $resum;
}

function pintaTargeta(array $producte): void
{
    $estat = estatEstoc($producte['estoc']);
    $nom   = htmlspecialchars($producte['nom']);
    $preu  = formatPreu(preuAmbIva($producte['preu']));
    $classe = classeEstat($estat);

    echo "<article class=\"targeta\">";
    echo "<h3>$nom</h3>";
    echo "<p class=\"categoria\">{$producte['categoria']}</p>";
    echo "<p class=\"preu\">$preu <small>(IVA inclòs)</small></p>";
    echo "<p class=\"estat $classe\">$estat</p>";
    echo "</article>";
}

function pintaGraella(array $productes): void
{
    if (count($productes) === 0) {
        echo '<p class="buit">No hi ha productes en aquesta categoria.</p>';
        return;
    }

    echo '<div class="graella">';
    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitBazar · Catàleg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>BitBazar</h1><p>Catàleg de material informàtic</p></header>
<main>
    <h2>Resum del catàleg</h2>
    <ul class="resum">
    <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
        <li><strong><?= str_replace('_', ' ', $clau) ?>:</strong>
            <?= is_float($valor) ? formatPreu($valor) : $valor ?></li>
    <?php endforeach; ?>
    </ul>

    <h2>Tots els productes</h2>
    <?php pintaGraella(filtraCategoria($productes, 'totes')); ?>

    <h2>Només accessoris</h2>
    <?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

    <h2>Categoria inexistent (jocs)</h2>
    <?php pintaGraella(filtraCategoria($productes, 'jocs')); ?>
</main>
<footer><p>BitBazar &copy; <?= date('Y') ?></p></footer>
</body>
</html>
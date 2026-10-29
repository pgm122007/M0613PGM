
<?php
// PGM
/* =====================================================================
   Dades
   ===================================================================== */

$concerts = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta'   => 'sí',
        'ubicacio'  => 'Pavelló',
    ],
];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>M0613 ACT02 · Apartat 4</title>
</head>
<body>
<h1>Apartat 4 · Arrays multidimensionals</h1>

<!-- ================= EXERCICI 1: Taula de concerts ================= -->
<h2>Exercici 1: Taula de concerts</h2>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Escenari</th>
            <th>Hora</th>
            <th>Assistents</th>
            <th>Preu</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($concerts as $c): ?>
            <tr>
                <td><?= $c['nom'] ?></td>
                <td><?= $c['escenari'] ?></td>
                <td><?= $c['hora'] ?></td>
                <td class="num"><?= number_format($c['assistents'], 0, ',', '.') ?></td>
                <td class="num"><?= number_format($c['preu'], 2, ',', '.') ?> €</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Accés directe, sense bucle: primer la posició (2 = tercer), després el camp -->
<p>Tercer concert del cartell: <strong><?= $concerts[2]['nom'] ?></strong></p>

<!-- ================= EXERCICI 2: Array associatiu a dos nivells ================= -->
<h2>Exercici 2: Escenaris ()</h2>

<!-- Accés directe: primer la clau de l'escenari, després la del camp -->
<p>Capacitat de l'escenari Gran:
    <strong><?= number_format($escenaris['Gran']['capacitat'], 0, ',', '.') ?></strong> persones</p>

<h3>Recorregut amb dos foreach niats</h3>
<?php foreach ($escenaris as $nomEscenari => $dades): ?>
    <h4>Escenari <?= $nomEscenari ?></h4>
    <ul>
        <?php foreach ($dades as $camp => $valor): ?>
            <li><?= ucfirst($camp) ?>: <?= $valor ?></li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>

<?php
/*
 * Al foreach de fora, $dades és un array sencer (['capacitat' => ...,
 * 'coberta' => ..., 'ubicacio' => ...]). Per això cal un segon foreach
 * per obrir-lo i recórrer cadascun dels seus camps.
 */
?>
</body>
</html>

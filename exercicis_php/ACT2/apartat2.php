<?php
// PGM
/* =====================================================================
   Dades de partida (les fan servir tots els exercicis)
   ===================================================================== */

// Array de grups (valors)
$grups = array('Txarango', 'Mushkaa', 'Julieta', 'Figa Flawas', 'Oques Grasses');

// Array associatiu grup => estil
$estils = array(
    'Txarango'      => 'Mestissatge',
    'Mushkaa'       => 'Pop urbà',
    'Julieta'       => 'Pop',
    'Figa Flawas'   => 'Rumba',
    'Oques Grasses' => 'Pop-rock'
);

/* Funció de l'exercici 4: mostra els elements de l'últim al primer.
   Rep una CÒPIA de l'array (pas per valor), així que moure el punter
   aquí dins no afecta l'array original de fora. */
function recorrerInvers(array $llista)
{
    if (count($llista) === 0) {
        echo "L'array és buit.<br>";
        return;
    }

    end($llista);                          // ens situem a l'última casella
    do {
        $index = key($llista);             // índex on som
        $valor = current($llista);         // valor on som
        echo "$index: $valor<br>";
    } while (prev($llista) !== false);     // retrocedem; abans de la primera, prev() torna false
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>M0613 ACT02 · Apartat 2</title>
</head>
<body>
<h1>Apartat 2 · Recórrer arrays</h1>

<!-- ================= EXERCICI 1: Foreach bàsic ================= -->
<h2>Exercici 1: Foreach bàsic</h2>

<h3>Versió 1: llista de grups</h3>
<ul>
    <?php foreach ($grups as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<h3>Versió 2: amb la posició de cada grup</h3>
<ul>
    <?php foreach ($grups as $posicio => $grup): ?>
        <li>Posició <?= $posicio ?>: <?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<!-- ================= EXERCICI 2: Foreach sobre un associatiu ================= -->
<h2>Exercici 2: Foreach sobre un associatiu (foreach)</h2>

<table>
    <thead>
        <tr><th>Grup</th><th>Estil</th></tr>
    </thead>
    <tbody>
        <?php foreach ($estils as $grup => $estil): ?>
            <tr>
                <td><?= $grup ?></td>
                <td><?= $estil ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr><td>Total de grups</td><td><?= count($estils) ?></td></tr>
    </tfoot>
</table>

<!-- ================= EXERCICI 3: El mateix sense foreach ================= -->
<h2>Exercici 3: El mateix sense foreach (do-while)</h2>

<table>
    <thead>
        <tr><th>Grup</th><th>Estil</th></tr>
    </thead>
    <tbody>
        <?php
        reset($estils);                       // punter a la primera casella
        do {
            $grup  = key($estils);            // clau on som
            $estil = current($estils);        // valor on som
            echo "<tr><td>$grup</td><td>$estil</td></tr>";
        } while (next($estils));              // avancem; al final next() torna false
        ?>
    </tbody>
    <tfoot>
        <tr><td>Total de grups</td><td><?= count($estils) ?></td></tr>
    </tfoot>
</table>
<p>Comprovació: la taula de l'exercici 3 és idèntica a la de l'exercici 2.</p>

<?php
/*
 * Quina manera em sembla més clara?
 * Em sembla més clara la de foreach. Cada volta ja em dona directament
 * la clau i el valor ($grup => $estil), no cal moure cap punter, no hi
 * ha risc d'oblidar reset() i el codi es llegeix gairebé com una frase.
 * La versió amb punter és més llarga (reset, key, current, next) i té
 * una trampa: while (next($a)) s'atura també si el valor següent val
 * false, 0 o '' (valors "falsy"), encara que existeixi la casella.
 * La del punter només té sentit quan necessitem moure'ns endavant i
 * endarrere manualment.
 */
?>

<!-- ================= EXERCICI 4: A l'inrevés, dins d'una funció ================= -->
<h2>Exercici 4: A l'inrevés, dins d'una funció</h2>

<h3>Crida a recorrerInvers($estils)</h3>
<div class="sortida">
    <?php recorrerInvers($estils); ?>
</div>

<h3>L'array original recorregut amb un foreach normal (no s'ha vist afectat)</h3>
<div class="sortida">
    <?php foreach ($estils as $grup => $estil): ?>
        <?= $grup ?>: <?= $estil ?><br>
    <?php endforeach; ?>
</div>
<p>L'ordre continua sent el mateix que a l'inici: la funció treballava amb una
   còpia de l'array, així que el punter de l'original no s'ha mogut.</p>
</body>
</html>

<?php
// PGM
/* =====================================================================
   Funcions
   ===================================================================== */

/* Torna la posició (índex) on hi ha el grup, o -1 si no hi és.
   El return surt immediatament de la funció (i del bucle) en trobar-lo. */
function buscaGrup(array $llista, string $grup)
{
    foreach ($llista as $posicio => $valor) {
        if ($valor === $grup) {
            return $posicio;
        }
    }
    return -1;                      // si arribem aquí, no l'ha trobat
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>M0613 ACT02 · Apartat 3</title>
</head>
<body>
<h1>Apartat 3 · Funcions per tractar arrays</h1>

<!-- ================= EXERCICI 1: Buscar un grup ================= -->
<h2>Exercici 1: Buscar un grup</h2>

<?php
$cartell = array('Txarango', 'Mushkaa', 'Julieta', 'Figa Flawas', 'Oques Grasses');

// in_array() amb comparació estricta (tercer paràmetre a true)
$grupsAComprovar = array('Mushkaa', 'Els Amics de les Arts');

foreach ($grupsAComprovar as $grup):
    if (in_array($grup, $cartell, true)): ?>
        <p class="si">✔ <?= $grup ?> és al cartell.</p>
    <?php else: ?>
        <p class="no">✘ <?= $grup ?> NO és al cartell.</p>
    <?php endif;
endforeach;
?>

<h3>buscaGrup()</h3>
<?php
$provaSi = 'Julieta';                   // hi és
$provaNo = 'Lildami';                   // no hi és

$posSi = buscaGrup($cartell, $provaSi);
$posNo = buscaGrup($cartell, $provaNo);
?>
<p><?= $provaSi ?>: buscaGrup() torna <strong><?= $posSi ?></strong>
   (és a la posició <?= $posSi ?>).</p>
<p><?= $provaNo ?>: buscaGrup() torna <strong><?= $posNo ?></strong>
   (<?= $posNo === -1 ? "no hi és" : "hi és" ?>).</p>

<!-- ================= EXERCICI 2: Les quatre ordenacions ================= -->
<h2>Exercici 2: Les quatre ordenacions</h2>

<?php
// Array associatiu grup => nombre d'assistents
$assistents = array(
    'Txarango'      => 5100,
    'Mushkaa'       => 1850,
    'Julieta'       => 2100,
    'Figa Flawas'   => 3600,
    'Oques Grasses' => 4200
);

// Quatre còpies (en PHP, assignar un array en fa una còpia)
$copiaAsort  = $assistents;
$copiaArsort = $assistents;
$copiaKsort  = $assistents;
$copiaKrsort = $assistents;

asort($copiaAsort);      // per VALOR, de menor a major
arsort($copiaArsort);    // per VALOR, de major a menor
ksort($copiaKsort);      // per CLAU, de menor a major (alfabètic A-Z)
krsort($copiaKrsort);    // per CLAU, de major a menor (alfabètic Z-A)
?>

<h3>Original</h3>
<pre><?php print_r($assistents); ?></pre>

<h3>asort(): per valor, de menor a major</h3>
<pre><?php print_r($copiaAsort); ?></pre>

<h3>arsort(): per valor, de major a menor</h3>
<pre><?php print_r($copiaArsort); ?></pre>

<h3>ksort(): per clau, de menor a major</h3>
<pre><?php print_r($copiaKsort); ?></pre>

<h3>krsort(): per clau, de major a menor</h3>
<pre><?php print_r($copiaKrsort); ?></pre>

<?php
/*
 * Diferència entre asort() i ksort():
 * - asort() ordena pel VALOR (aquí, el nombre d'assistents) i conserva
 *   l'associació clau => valor. Resultat: de menys a més gent.
 * - ksort() ordena per la CLAU (aquí, el nom del grup) i també conserva
 *   l'associació. Resultat: alfabètic pel nom del grup.
 * En els dos casos l'array rebut es modifica directament (no en tornen
 * un de nou); per això hem treballat amb còpies.
 */
?>

<!-- ================= EXERCICI 3: Barrejar el cartell ================= -->
<h2>Exercici 3: Barrejar el cartell</h2>

<h3>shuffle() sobre l'array associatiu</h3>
<?php
$barrejat = $assistents;
shuffle($barrejat);
?>
<pre><?php print_r($barrejat); ?></pre>

<?php
/*
 * Què ha passat amb els noms dels grups?
 * Han desaparegut. shuffle() desordena els valors i REASSIGNA els
 * índexs numèrics (0, 1, 2...), de manera que les claus (els noms dels
 * grups) es perden i només queden els nombres d'assistents sense saber
 * a quin grup pertanyia cada un.
 */
?>
<p>Els noms dels grups s'han perdut: shuffle() descarta les claus i només en
   conserva els valors, renumerats de 0 en endavant.</p>

<h3>Fer-ho bé: el nom del grup com a valor</h3>
<?php
$noms = array_keys($assistents);        // o directament: array('Txarango', 'Mushkaa', ...)
shuffle($noms);
?>
<p>Ordre del sorteig:</p>
<ol>
    <?php foreach ($noms as $nom): ?>
        <li><?= $nom ?></li>
    <?php endforeach; ?>
</ol>
</body>
</html>

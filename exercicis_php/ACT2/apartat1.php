<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>M0613 ACT02 · Apartat 1</title>
</head>
<body>
<h1>Apartat 1 · Crear arrays i veure'n el contingut</h1>

<?php
//PGM
/* =====================================================================
   EXERCICI 1: Les tres maneres
   ===================================================================== */

// 1. Assignació directa: cinc grups, un a la posició 8
$grups[0] = 'Txarango';
$grups[]  = 'Mushkaa';        // següent posició lliure: la 1
$grups[8] = 'Julieta';        // salt a la posició 8
$grups[]  = 'Figa Flawas';    // va a la 9, no a la 2
$grups[]  = 'Oques Grasses';  // va a la 10

// 2. Amb la funció array()
$estils = array('Mestissatge', 'Pop urbà', 'Rumba');

// 3. Cridant una funció que retorna un array
$edicions = range(2019, 2026);
$paraules = explode(' ', 'El festival torna aquest estiu');

/*
 * Pregunta: per què el grup següent al 8 no va a la posició 2?
 * Resposta: quan fem $a[] = ..., PHP no busca forats lliures. Agafa
 * l'índex numèric MÉS GRAN que existeix en aquell moment i hi suma 1.
 * Com que l'índex més gran era el 8, el següent és el 9 (i després el 10).
 * Les posicions 2 a 7 queden buides: no existeixen a l'array.
 */
?>

<h2>$grups (assignació directa)</h2>
<?php /* <pre> = "preformatted text": el navegador respecta els salts de
         línia i els espais tal com estan al codi font (i fa servir font
         monoespaiada). Sense <pre>, print_r() es veuria tot en una sola
         línia, perquè HTML ignora els salts de línia. */ ?>
<pre><?php print_r($grups); ?></pre>

<h2>$estils (array())</h2>
<pre><?php print_r($estils); ?></pre>

<h2>$edicions (range)</h2>
<pre><?php print_r($edicions); ?></pre>

<h2>$paraules (explode)</h2>
<pre><?php print_r($paraules); ?></pre>

<h2>Comparant print_r, var_dump i var_export amb $estils</h2>

<h3>print_r()</h3>
<pre><?php print_r($estils); ?></pre>

<h3>var_dump()</h3>
<pre><?php var_dump($estils); ?></pre>

<h3>var_export()</h3>
<pre><?php var_export($estils); ?></pre>

<?php
/*
 * Diferències que hi veig:
 * - print_r(): mostra l'array de forma llegible, només índexs i valors.
 *   No diu de quin tipus és cada valor.
 * - var_dump(): afegeix el tipus i la mida de cada valor, p. ex.
 *   string(11) "Mestissatge", i la mida de l'array: array(3). Va bé per depurar.
 * - var_export(): treu codi PHP vàlid (array ( 0 => 'Mestissatge', ... ))
 *   que es podria copiar i enganxar per tornar a crear l'array.
 */
?>

<?php
/* =====================================================================
   EXERCICI 2: L'array associatiu
   ===================================================================== */

// Nota: reutilitzem el nom $estils tal com demana l'enunciat. Això
// SOBREESCRIU l'$estils de l'exercici 1 (que ja s'ha mostrat més amunt).
$estils = array();                      // comencem de zero

// Dos grups amb assignació directa
$estils['Txarango'] = 'Mestissatge';
$estils['Mushkaa']  = 'Pop urbà';

// Dos grups més amb array(): els afegim amb array_merge perquè
// l'array ja existeix i no volem perdre els dos primers
$estils = array_merge($estils, array(
    'Julieta'     => 'Pop',
    'Figa Flawas' => 'Rumba'
));
?>

<h2>Exercici 2: array associatiu grup =&gt; estil</h2>

<p>Estil de Txarango (accedint per la clau):
    <strong><?php echo $estils['Txarango']; ?></strong></p>

<?php
// Afegim un grup nou
$estils['Oques Grasses'] = 'Pop-rock';
?>

<p>Array sencer després d'afegir-hi un grup nou:</p>
<pre><?php print_r($estils); ?></pre>

<p>Nombre de grups: <strong><?php echo count($estils); ?></strong></p>

<?php
/* =====================================================================
   EXERCICI 3: Esborrar una casella
   ===================================================================== */
$cartell = array('Txarango', 'Mushkaa', 'Julieta', 'Figa Flawas', 'Oques Grasses');
?>

<h2>Exercici 3: Esborrar una casella</h2>

<p>Array inicial (count = <?php echo count($cartell); ?>):</p>
<pre><?php print_r($cartell); ?></pre>

<?php unset($cartell[2]); // esborrem el tercer grup (índex 2: Julieta) ?>

<p>Després d'unset($cartell[2]) (count = <?php echo count($cartell); ?>):</p>
<pre><?php print_r($cartell); ?></pre>
<p>Fixa't que els índexs NO es renumeren: ara falta el 2.</p>

<?php $cartell[] = 'La Ludwig Band'; ?>

<p>Després d'afegir-hi un grup nou amb [] (count = <?php echo count($cartell); ?>):</p>
<pre><?php print_r($cartell); ?></pre>
<p>El grup nou ha anat a la posició <strong><?php echo array_key_last($cartell); ?></strong>,
   no a la 2 que havia quedat lliure.</p>

<?php
/*
 * Per què un for de 0 a count()-1 pot fallar després d'un unset()?
 * Perquè unset() esborra la casella però NO renumera els índexs. Després
 * d'esborrar l'índex 2, l'array té 4 elements amb índexs 0, 1, 3 i 4.
 * Un for de 0 a count()-1 (és a dir, de 0 a 3) intentaria llegir
 * $cartell[2], que ja no existeix (Warning: Undefined array key 2 i
 * valor null), i en canvi no arribaria mai a l'índex 4, de manera que
 * l'últim grup no es mostraria. Amb forats, cal fer servir foreach.
 */
?>
</body>
</html>

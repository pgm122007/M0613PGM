<?php
$nota = 7.5;

if($nota >= 9){
  $qualif = 'Excel·lent';
} elseif ($nota >= 7){
  $qualif = 'Notable';
} elseif($nota>=5){
  $qualif = 'Aprovat';
} else {
  $qualif = 'Suspès';
}

//Moles opciones, switch y match
$zona = 'local';

  switch ($zona){
    case 'local':
      $enviament = 0;
      break;
    case 'peninsula':
      $enviament = 4.95;
      break;
    default: 9.95;
  }

  $enviament = match ($zona){
    'local'     => 0,
    'peninsula' => 4.95,
    'default'   => 9.95,
  };

// tres bucles, tres usos

  for ($i = 1; $i <= 10; $i++){
    echo $i;
  }

$saldo = 10;
$objectiu = 100;
$anys = 0;

  while ($saldo < $objectiu){
    $saldo *= 1.03;
    $anys++;
  }

  do {
      $n = rand(1, 6);
  } while($n !== 6);

// Arrays Indexados

  $colors = ['vermell', 'verd', 'blau'];


// echo $colors[0];      //vermell
// echo $count($colors); // 3

  $colors[] = 'groc';   // afegeix al final

  print_r($colors);

  $prodcute = [
      'nom'   => 'Teclat mecanic',
      'preu'  => 79.90,
      'estoc' => 4,
  ];

//  echo $producte['nom'];
  $producte['preu'] = 69.90;

  foreach ($colors as $color) {
//  echo "<li>$colors</li>";
  }

  foreach ($producte as $clau => $valor) {
      echo "<dt>$clau</dt>";
      echo "<dd>$valor</dd>";
  }

  $productes = [
      ['nom' => 'Teclat', 'preu' => 79.9],
      ['nom' => 'Ratoli', 'preu' => 24.5],
      ['nom' => 'Monitor', 'preu' => 189],
  ];

//Funciones de arrays que ahorran bucles

  /*
  count($a) --> cuantos elementos tiene
  in_array($x, $a, true) -- > si un valor hi es(el true la fa la comparació estricta)
  array_key_exists('k', $a) --> si una clave existe
  sort / rsort / ksort --> Ordena por valor o por clave
  array_sum / max / min --> suma, maximo y minimo
  array_column($a, 'preu') --> Quita una columna de un array de arrays
  implode(', ', $a) /explode --> Array a texto y texto a array

  */
  $estoc = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<!--<?php
// PHP dentro de HTML

//Forma erronea
if($estoc > 0 ){ ?>
  <p>En estoc</p>
<?php } else {?>
  <p>Esgotat</p>
  <?php } ?>
    -->
<?php
//Forma correcta
if($estoc > 0): ?>
  <p>En estoc</p>
<?php else: ?>
  <p>Esgotat</p>
  <?php endif;?>

<!-- if (...): ... endif; foreach(...): ...endforeach; for(...): ... enfor; while(...): ...endwhile;-->

<table>
<?php for($i = 1; $i <= 10; $i++): ?>
  <tr>
    <td><?= $i ?> x 7</td>
    <td><?= $i * 7 ?></td>
  </tr>
  <?php endfor; ?>

  <?php foreach ($productes as $p): ?>
    <tr>
      <td><?= $p['nom'] ?></td>
      <td><?= $p['preu']?> EUR</td>
    </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
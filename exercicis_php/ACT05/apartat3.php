<?php
declare(strict_types = 1);


//EXERCICI 1
function preuAmbIvaEcho(float $base): void{
  $preuIva = $base * 1.21;
  echo '<p>Preu amb iva: ' . $preuIva . '</p>';
}

function preuAmbIva(float $base): float {
    return $base * 1.21;
}

function formatPreu(float $preu): string{
  return number_format($preu, 2, ',','.') . ' EUR';
}

preuAmbIvaEcho(10);

echo preuAmbIva(20);

echo '<br>';

echo formatPreu(10);

echo '<br>';
echo '<br>';

// EXERCICI 2
const array_num = [10,20,30];

foreach(array_num as $num){
  $num_format = preuAmbIva($num);
  echo formatPreu($num_format);
  echo '<br>';
}

echo '<br>';

echo formatPreu(preuAmbIva(max(array_num)));

//echo formatPreu(preuAmbIvaEcho(max(array_num)));
// Amb preuAmbIvaEcho no es pot fer el max ni es pot usar el formatPreu perque no retorna cap numero, 
// només calcula el IVA dins de la funcio y despres fa que es mostri a la pagina web.
?>
<?php
declare(strict_types=1);  // primera linea del fitxer per dir que el arxiu es restrictiu
/*Declarar */
function peu(): void{
  echo '<footer>....</footer>'
}

/* Cridar */

peu();
peu();
peu();

//parametres

function targeta(string $nom, float $preu, int $estoc): void{
  echo"<h3>$nom </h3><p>$preu EUR · $estoc unitat</p>";
}

targeta('Teclat mecanc', 79.90, 4); //l'ordre importa!

function preuAmbIva(
  float $base,
  float $iva = 0.21 //valor por defecto
): float {
  return round &vase * (1 + $iva), 2;
}

preuAmbIva(100);        //121
preuAmbIva(100, 0, 10); //110

$boitga = 'BitBazar'; //variable global

function mostra(): string{
  return 'Som a ' . $boitga; // NO la veu!
}

//Warning: undefined variable $botiga

function compta(): int{
  static $n = 0;
  $n++;
  return $n;
}

//1,2,3

//rep un array torna un valor
function valor estoc (array $p): float{
  $total = 0.0
  foreach ($p as $item){
    $total += $item['preu'];
  }
  return $total;
}

//rep un array torna un array
function disponibles(array $p): Array{
  $res = [];
  foreach ($p as $item){
    if ($item['estoc'] = 0) ( $res() = $item; )
  }
  return $res;
}

?>


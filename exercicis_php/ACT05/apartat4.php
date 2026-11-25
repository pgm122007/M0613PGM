<?php
declare(strict_types = 1);

//EXERCICI 1
function preuAmbIva(float $base, float $IVA = 0.21): float {
  return $base * (1 + $IVA);
}

echo preuAmbIva(10);
echo '<br>';
echo preuAmbIva(10, 0.10);
echo '<br>';
echo preuAmbIva(10, 0.04);
echo '<br>';

//EXERCICI 2
function aplicaDescompte(float $preu, int $percentatge = 10): float{
  return $preu - ($preu * $percentatge / 100);
}

echo '<br>';
echo aplicaDescompte(100);
echo '<br>';
echo aplicaDescompte(100, 25);

//EXERCICI 3
function benvinguda(string $nom, string $salutacio = 'Hola'): string{
  return '<h1>' . $salutacio . ', ' . $nom . '</h1>';
}

//echo benvinguda('Salutacions', 'Pau');

//no dona cap error, només inverteix els parametres y posa Pau, Salutacions
?>
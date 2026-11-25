<?php
declare(strict_types = 1);


function saluda(string $nom): void{
  echo "<h1>Benvingut " . $nom . "</h1>";
}


saluda('pau');
saluda('gerard');
saluda('miquel');

function targeta(string $nom, float $preu, int $estoc): void{
  echo '<p>Nom producte: ' . $nom . '<br> preu: ' . number_format($preu, 2,',','.') . '<br> estoc: ' . $estoc . '</p>';
}

echo '<div class="graella"> ' 
        . targeta('Flor', 14.00, 40) . '<br>' . targeta('Manzana', 1.00, 100) . '<br>' . targeta('Pera', 1.25, 90) .
      '</div>';

//targeta(4, 'Cucs', 14.00);
// Dona aquest error: Fatal error: Uncaught TypeError: targeta(): Argument #1 ($nom) must be of type string
// Vol dir que el nom ha de ser una string
?>

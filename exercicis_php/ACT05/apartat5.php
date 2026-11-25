<?php
declare(strict_types = 1);

//EXERCICI 1
function area(float $base, float $altura): float{
  return $base * $altura;
}

function esgotat(int $unitats): bool{

}

echo area(4, 5);
echo '<br>';
echo area(2.5, 3.9);
echo '<br>';
try { 
 echo area('3', 4.0); 
} catch (TypeError $e) { 
 echo 'Error de tipus: ' . $e->getMessage(); 
} 

// ERROR: Fatal error: Uncaught TypeError: area(): Argument #1 ($base) must be of type float, string given, called in 
// M0613PGM\exercicis_php\ACT05\apartat5.php on line 17 and defined in M0613PGM\exercicis_php\ACT05\apartat5.php on line 5
// TypeError: area(): Argument #1 ($base) must be of type float, string given, called in 
// M0613PGM\exercicis_php\ACT05\apartat5.php on line 17 in M0613PGM\exercicis_php\ACT05\apartat5.php on line 5

// Amb strict_types PHP obliga a usar el tipus correcte i ens ajuda
// a detectar errors abans que provoquin resultats incorrectes.
?>
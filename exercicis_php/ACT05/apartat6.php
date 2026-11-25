<?php
declare(strict_types = 1);

//EXERCICI 1
$botiga = 'Botiga coloradeishon';

function trucaBotiga(){
  echo $botiga;
}

//trucaBotiga();
// PHP Warning:  Undefined variable $botiga in C:\wamp64\www\M0613PGM\exercicis_php\ACT05\apartat6.php on line 7

function trucaBotigaBe(string $variable): string{
  return $variable;
}

echo trucaBotigaBe($botiga);
echo '<br>';

//EXERCICI 2
function comptaLocal(): int{
  $numero = 0;
  $numero++;
  return $numero;
}

function comptaStatic(): int{
  static $numero = 0;
  $numero++;
  return $numero;
}

echo 'Compta local: ' . comptaLocal() . comptaLocal() . comptaLocal();
echo '<br>';
echo 'Compta static: '. comptaStatic() . comptaStatic() . comptaStatic();
// la diferencia entre sortides es que el compte static recorda els canvis que ha tingut anteriorment,
// la compta local s'executa una vegada no recorda nada y torna a on estaba la primera vegada, per aixo surt 111.

?>
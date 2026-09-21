<?php 
echo 'Hola';
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';


print 'Hola';

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat';
$total = $edat + 1;
echo $nom;

$x = 5; 
$x = 'cinc';

$a = '10' + 5;
$b = '10' . 5;

var_dump($a, $b);

$nom = 'Aina';
echo 'Hola $nom'; //no interpreta variables

$nom = 'Aina';
echo "Hola $nom"; //Les variables es resolven

$nom = 'Aina';
$punts = 8;
$base = 4;

echo 'Hola '. $nom . ', tens' . $punts . ' punts';    //interpolacio amb .
echo "Hola $nom, tens $punts punts";                  //interpolacio
echo "Hola ($nom), tens ($punts) punts";              //interpolacio amb claus

define('IVA', 0.21);
const BOTIGA = 'Ca la Web';

echo BOTIGA; //sense $
$total = $base * (1 + IVA);

$missatge = 'Hola'; //ambit global
function saluda(){
  echo '$missatge'; //no la veu
  $intern ='Adeu'; //ambit local
}

saluda();
// echo $intern; //tampoc la veu

// declare (strict_types= 1); Primera liena del fitxer. PHP deixa de conventir tipus pel seu compte
//int_set('display_errors', '1'); Canvia un paràmetre només per aquesta petició.
// error_reporting (E_ALL); Decideix quins nivells d'error es tenen en compte ara mateix
// setlocale() · data_default_timezone_set() Idioma i zona horaria per aquest script

//IVA = 0.10; -> error fatal
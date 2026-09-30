<?php

// Definicion de funcion
// Function nomFuncion($arg1, $arg2){
    //Código de la funcíon 
    // return valor o no; 
//}

function funcionTest(){
  $var = 10;
  return $var;
}

// como la funcion test tiene un return, tengo
// que igualarla a una variable para recoger el valor del return

$var_fun = funcionTest();
echo "La variable igualada a la función vale: " . $var_fun;

// Funcion sin return
function functionTestSin(){
  $var = 20;
  echo "la variable dentro de la función vale: " . $var;
}

functionTestSin();

// Como podemos utilizar dentro 
// de las funciones variables glovales

$var2 = 50;

function funcionConGlobal(){

    // Para poder utilizar una vatiable de fuera del ambito
    // de la funcion se utiliza la palabra reservada global

    global $var2;

    echo "La variable de var2 de fuera de la funcion vale:" . $var2;
}

funcionConGlobal();

//Recursividad --> una funcion se puede llamar a si misma 

function factorial($numero){
    if ($numero == 1){
    return $numero;
    } else {
      return $numero * factorial($numero -1);
    }
  }
echo "El factorial de 7 es: " . factorial(7). "<br>";
?>
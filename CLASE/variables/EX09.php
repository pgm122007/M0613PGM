<?php

// Funciones preestablecidas de php
// isset() --> permite saber si una variable existe en nuestro programa

// unset() --> liberar espacio en memoria
//        (destruir) de una variable 

$var = "10";

if(isset($var)){
  echo "La variable existe";
}

unset($var);

if(isset($var)){
  echo "la variable $var existe";
} else {
  echo "La variable $var no existe";
}

// gettype() ---> nos retorna el tipo de variable
//          que pasamos por parámetro

//settype() ---> assignamos un tipo de dato a la 
//          variable que pasamos por parámetro 

//empty() ---> función que mira si una variable
//          esta vacia, no existe o su valor es 0 

// is_integer(var), is double(var), is_array(var)
// is_string(var) ---> para saber si una variable 
//              es integer, double, string, array, etc.

// Ex1: for para la tabla de multiplicar del 5
// var existe?

// Ex2: mostrar los números pares del 1 al 1000

// Ex3: dibuja las tablas html donde salgan 
// las tablas de multipliplicar del 1 al 10

$num = 5;

if(isset($num)){
  for($i = 1; $i <= 10; $i++){
    echo "$num x $i = " . $num*$i;
    echo "<br>";
  }
} else {
  echo "la variable no existe";
}

echo "<br>";
echo "Pares de 1 al 100";
echo "<br>";

for($i = 1; $i <= 1000; $i++){
    if($i % 2 == 0){
      echo "El numero $i es par";
      echo "<br>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php for($i = 1; $i <= 10; $i++): ?>
  <table>
  <?php for($j = 0; $j <= 10; $j++): ?>
    <tr>
      <td><?= $i ?> x <?= " $j =";?></td>
      <td><?= $i * $j ?></td>
    </tr>
  <?php endfor; ?>
  </table>
  <br>
<?php endfor;?>

</body>
</html>
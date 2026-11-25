<?php

$cadena = "Hola";

$cadena{0} = "C";

echo "Ahora cadena es: " . $cadena; //Saldra Cola (H por C)

//Funciones prestablecidas de PHP

// strlen

$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de carácters es: " . $num_caracters . "<br>";


// strpos --> retorna la casella on troba la subcadena
// dins de la cadena pasada
// Sempre retonra la primera ocurréncia

$email = "hola@jviladoms.cat";
echo "Posició @: " . strpos($email, "@") . "<br>";

//strcmp --> string compare,compara dos cadenas
// si retorna 0 es igualç
// strcmp()
//si retonra <0 la primera cadena es más pequeña
// si retonra >0 la primera cadena es más grande

$cad1 = "Alejandra";
$cad2 = "AAAAAAAA";

echo "Utilizamos strcmp: " . strcmp($cad1, $cad2). "<br>";

//substr: retorna una subcadena de caracteres d'una
// cadena a  partir d'una posicio especifica fins
// al final o del tamany especificat.
// la cadena original no pateix cap modificació

$cadena = "PHP es un llenguatje facil";
echo "El substr de 0 a 3 és " . substr($cadena, 0 ,3). "<br>";
echo "El substr de 21 es " . substr($cadena, 21) . "<br>";

// trim: eliminar espacions vacios y saltos de línea
// línea que hay al principio y al final de la cadena

echo "Ejemplo con trim: " .trim("                   hola que tal          "). "<br>";

//ltrim: elimina los espacios que hay en blanco al
// principio de la cadena

//str_replace($antiga, $nova, $cadena): substitueix
// la cadena $ antiga per la cadena $nova dins de 
// $cadena

$cadena = "PHP es facil";
$antiga = "no es facil";
$nova = "no es dificil";

echo "Ejemplo str_replace: ".  str_replace($antiga, $nova, $cadena). "<br>";

// ereg_replace / eregireplace()

// strtolower($cadena): passa la cadena a minuscules
// strtoupper($cadena): passa la cadena a majuscules

//explode: permet dividir una cadena segons un caracter o patrò

// Exercici 1: bucsca en php.net la funció
// str_word_count() y pon un ejemplo

  echo "<h3>Ejercicio 1: str_word_cont()</h3>";
  $frase = "Hola mundo, esto es PHP";
  echo "Numero de palabras: " . str_word_count($frase) . "<" 
  echo "Formato 1 (array de palabras): ";
  echo(str_word_count($frase,1));
  echo "<br>"

  echo "Formato 2 (posicion => palabras): ";
  echo (str_word_count($frase,2));
  echo "<br>";

// Exercici 2: busca en php.net la funció 
// leveshtein() y pon un ejemplo

  $string1 = "Hola";
  $string2 = "HolaaloH"
  $lev = levenshtein($string1, $string2);
  echo $lev;


// Exercici 3: busca que es el operador ternario y pon un ejemplo
  $edad = 18
  $resultado = $edad >= 18 ? "Es major de edad" : "Es menor de edad";

  echo $resultado;

//Exercici 4: explica que hace esta funcion

  echo "<br>";
  echo "-----------";
  echo <"br">;

    $str = "hello friend your looking good today!";
      function comprova_email($email){
        $email = strtolower($email);

        $email = str_replace(' ', ''$email);
        $teArrovaa= $strpos(($email, '@') !==false);

        $numCaracters = strlen($email);

        return [
            'email_normalitzat' => $email,
            'te_arrova' => $teArrovaa,
            'num_caracters' => $numCaracters
        ];
        
      }



?>
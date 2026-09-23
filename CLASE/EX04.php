<?php

  # nom = 'Aina'; falta el $
  $nom = 'Aina';
  # $assignatura = 'Desenvolupament web' Faltan las comillas
  $assignatura = 'Desenvolupament web';

  $nota1 = 7;
  $nota2 = 8;
  $mitjana = $nota1 + $nota2 / 2;

  echo "<h1> Bulleti de notes </h1>";
  # echo '<p>Alumne: $nom</p>'; faltan las comillas dobles
  echo "<p>Alumne: $nom</p>";
  # echo '<p>Assignatura: ' + $assignatura + '</p>'; esta mal escrito y faltan las comillas dobles
  echo "<p>Assignatura: $assignatura</p>";
  # echo "<p>Mitjana: $mitjana</p>; falta la comilla
  echo "<p>Mitjana: $mitjana </p>";
  echo '<p>Generat el ' . date('d/m/Y') . '</p>';

?>
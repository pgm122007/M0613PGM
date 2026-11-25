<?php
// Vamos a trabajar con sessiones
session_start();

// Diferencias hay entre require require_once:
  // requier_once() --> evita que se carguen mas de una vez 
  // require() --> pueden cargarse más de una vez dar errores

  // require_once() --> ficheros de configuracion y funciones 
require_once 'config.php';
require_once 'funciones.php';

$errors = [];

// Si han clicado el boton

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $usuari = camp('usuari');
  $clau = $_POST;
}
?>
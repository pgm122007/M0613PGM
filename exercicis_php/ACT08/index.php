<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

$titolPagina = 'Inici';
require 'header.php';
?>

        <h2>Benvinguts a la botiga</h2>
        <p>Pàgina d'inici. Inicia sessió per accedir a la teva àrea privada.</p>

<?php
require 'footer.php';

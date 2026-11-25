<?php
setcookie('ultimaVisita', date('H:i:s'), time() + 3600);
 
// Si existeix la cookie ultimaVisita
if (isset($_COOKIE['ultimaVisita'])) {
    echo 'Hi eres a les ' . $_COOKIE['ultimaVisita'];
} else {
    echo 'Encara no hi ha cap cookie.';
}
?>
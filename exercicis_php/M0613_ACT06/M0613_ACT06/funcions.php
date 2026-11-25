<?php
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

function etiqueta(string $clau): string
{
    $noms = [
        'nom'         => 'Nom',
        'cognom'      => 'Cognom',
        'naixement'   => 'Data de naixement',
        'telefon'     => 'Telèfon',
        'usuari'      => 'Usuari',
        'correu'      => 'Correu electrònic',
        'carrer'      => 'Carrer i número',
        'poblacio'    => 'Població',
        'codiPostal'  => 'Codi postal',
        'tipusClient' => 'Tipus de client',
        'origen'      => 'Com ens has conegut',
        'bulleti'     => 'Vol rebre ofertes',
    ];

    return $noms[$clau] ?? ucfirst($clau);
}

function casella(string $camp): bool
{
    return isset($_POST[$camp]);
}


function esc(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

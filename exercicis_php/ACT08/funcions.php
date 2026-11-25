<?php
/**
 * Neteja un camp rebut per POST.
 */
function camp(string $nom): string
{
    return trim(htmlspecialchars($_POST[$nom] ?? ''));
}

/**
 * Comprova un usuari i una contrasenya contra la llista d'usuaris.
 *
 * @param string $usuari Nom d'usuari escrit al formulari
 * @param string $clau   Contrasenya escrita al formulari
 * @return array|null    Dades de l'usuari, o null si no són correctes
 */
function comprovaCredencials(string $usuari, string $clau): ?array
{
    if (!isset(USUARIS[$usuari])) {
        return null;
    }

    if (!password_verify($clau, USUARIS[$usuari]['hash'])) {
        return null;
    }

    return USUARIS[$usuari];
}

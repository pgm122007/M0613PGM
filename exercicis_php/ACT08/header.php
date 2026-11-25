<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina ?? 'Botiga') ?> · <?= NOM_BOTIGA ?></title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header>
        <header>
    <p class="usuari">
    <?php if (isset($_SESSION['usuari'])): ?>
        Hola, <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong>
        &middot; <a href="sortir.php">Sortir</a>
    <?php elseif (basename($_SERVER['SCRIPT_NAME']) !== 'login.php'): ?>
        <a href="login.php">Iniciar sessio</a>
    <?php endif; ?>
    </p>
</header>
    <main>

<?php

const NOM = 'Paella';
const VIDA = 140;
const EXP = 15;
const FUERZA_MAX = 100;
const FUERZA = 10;
const HERIDO = VIDA / 2;

$nom_pers = 'Pereira';
$classe = 'Castor';
$nivel = 1;
$vida_act = VIDA - (20 * $nivel);
$fuerza_act = FUERZA + (10 * $nivel);
$exp = 10;
$atac_base = 20;

$percentatgeVida = round(($vida_act / VIDA) * 100, 1);
$percentatgeForca = round(($fuerza_act / FUERZA_MAX) * 100, 1);
$expFalta = EXP - $exp;
$poderAtac = $atac_base + (5 * $nivel);

?>

<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">

    <title><?= NOM ?></title>

    <style>

        body {
            background: #000000;
            color: #f1f4f6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
        }

        h1 {
            color: #fefefe;
            margin-bottom: 5px;
        }

        .subtitulo {
            color: #f7f9f9;
            font-size: 20px;
        }

        .ficha {
            background: #17005e;
            max-width: 650px;
            margin: 45px auto;
            padding: 32px;
            border-radius: 15px;
        }

        .nombre {
            font-size: 28px;
            font-weight: bold;
        }

        .clase {
            color: #66757d;
            font-size: 18px;
            margin-bottom: 35px;
        }

        .dato {
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }

        .barra {
            background: #e1e8e8;
            border-radius: 99px;
            height: 18px;
            overflow: hidden;
            margin: 8px 0 20px;
        }

        .barra span {
            display: block;
            height: 100%;
            border-radius: 99px;
        }

        .vida {
            background: #29a90f;
        }

        .forca {
            background: #ad9f00;
        }

        .estado {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            border-radius: 20px;
            background: #f7c9c9;
            color: #c21f1f;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <h1><?= NOM ?></h1>

    <div class="subtitulo">
        Fitxa de personatge
    </div>

    <div class="ficha">

        <div class="nombre">
            <?php echo "$nom_pers"; ?>
        </div>

        <div class="clase">
            <?= $classe ?> - NIVELL <?= $nivel ?>
        </div>


        <!-- VIDA -->

        <div class="dato">
            <span>Vida</span>
            <span><?= $vida_act ?> / <?= VIDA ?> (<?= $percentatgeVida ?> %)</span>
        </div>

        <div class="barra">
            <span class="vida" style="width: <?= $percentatgeVida ?>%"></span>
        </div>


        <!-- FORÇA -->

        <div class="dato">
            <span>Força</span>
            <span><?= $fuerza_act ?> / <?= FUERZA_MAX ?> (<?= $percentatgeForca ?> %)</span>
        </div>

        <div class="barra">
            <span class="forca" style="width: <?= $percentatgeForca ?>%"></span>
        </div>


        <!-- ATAC -->

        <?php
        echo '<div class="dato">';
        echo '<span>Poder d\'atac</span>';
        echo '<span>' . $poderAtac . '</span>';
        echo '</div>';
        ?>


        <!-- EXPERIÈNCIA -->

        <div class="dato">
            <span>Experiència</span>
            <span><?= $exp ?> / <?= EXP ?></span>
        </div>

        <div class="dato">
            <span>Li falten</span>
            <span><?= $expFalta ?> punts per pujar de nivell</span>
        </div>


        <!-- ESTAT -->

        <div class="estado">
            Ferit
        </div>

    </div>

</body>

</html>
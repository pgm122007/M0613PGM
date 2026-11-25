<?php
$estudiants = [
      ['nom' => 'Carlos', 'curs' => 'ASIX', 'edat' => 5, 'nota_mitja' => 9.2],
      ['nom' => 'Marc', 'curs' => 'DAW', 'edat' => 20, 'nota_mitja' => 7.4],
      ['nom' => 'Juan', 'curs' => 'SMIX', 'edat' => 17, 'nota_mitja' => 6.0],
      ['nom' => 'Pepe', 'curs' => 'ASIX', 'edat' => 19, 'nota_mitja' => 10.0],
      ['nom' => 'Arnau', 'curs' => 'DAW', 'edat' => 67, 'nota_mitja' => 5.2],
      ['nom' => 'Pau', 'curs' => 'DAW', 'edat' => 23, 'nota_mitja' => 7.5],
      ['nom' => 'Jan', 'curs' => 'DAW', 'edat' => 21, 'nota_mitja' => 3.6],
      ['nom' => 'Miquel', 'curs' => 'ASIX', 'edat' => 45, 'nota_mitja' => 9.2],
      ['nom' => 'Aleix', 'curs' => 'SMIX', 'edat' => 15, 'nota_mitja' => 5.5],
      ['nom' => 'David', 'curs' => 'ASIX', 'edat' => 10, 'nota_mitja' => 1.1],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
  <?php foreach ($estudiants as $e):?>
    <tr>
      <td><?= $e['nom']?></td>
      <td><?= $e['curs']?></td>
      <td><?= $e['edat']?></td>
      <td><?= $e['nota_mitja']?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>
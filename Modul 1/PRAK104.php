<?php
// Indexed array
$smartphones = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 104</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th><b>Daftar Smartphone Samsung</b></th>
        </tr>
        <?php foreach ($smartphones as $hp) : ?>
        <tr>
            <td><?= $hp; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
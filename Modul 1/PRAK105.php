<?php
// Associative array
$smartphones = [
    "HP1" => "Samsung Galaxy S22",
    "HP2" => "Samsung Galaxy S22+",
    "HP3" => "Samsung Galaxy A03",
    "HP4" => "Samsung Galaxy Xcover 5"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 105</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            font-family: sans-serif;
        }
        th {
            background-color: red; /* Header warna merah */
            padding: 15px 5px;
            font-size: 22px;
            font-weight: 900;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach ($smartphones as $kode => $hp) : ?>
        <tr>
            <td><?= $hp; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
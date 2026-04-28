<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK204</title>
</head>
<body>
    <form method="POST">
        Nilai: <input type="number" name="nilai" min="0"><br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai != "") {
            echo "<b>Hasil: </b>";
            if ($nilai == 0) {
                echo "Nol";
            } elseif ($nilai >= 1 && $nilai <= 9) {
                echo "Satuan";
            } elseif ($nilai >= 11 && $nilai <= 19) {
                echo "Belasan";
            } elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 99)) {
                echo "Puluhan";
            } elseif ($nilai >= 100 && $nilai <= 999) {
                echo "Ratusan";
            } elseif ($nilai >= 1000) {
                echo "Anda Menginput Melebihi Limit Bilangan";
            }
        }
    }
    ?>
</body>
</html>
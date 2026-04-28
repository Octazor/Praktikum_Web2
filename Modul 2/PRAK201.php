<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK201</title>
</head>
<body>
    <form method="POST">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

        if ($nama1 <= $nama2 && $nama1 <= $nama3) {
            if ($nama2 <= $nama3) {
                $urut = [$nama1, $nama2, $nama3];
            } else {
                $urut = [$nama1, $nama3, $nama2];
            }
        } elseif ($nama2 <= $nama1 && $nama2 <= $nama3) {
            if ($nama1 <= $nama3) {
                $urut = [$nama2, $nama1, $nama3];
            } else {
                $urut = [$nama2, $nama3, $nama1];
            }
        } else {
            if ($nama1 <= $nama2) {
                $urut = [$nama3, $nama1, $nama2];
            } else {
                $urut = [$nama3, $nama2, $nama1];
            }
        }

        echo "<b>Output</b><br>";
        foreach ($urut as $nama) {
            echo "$nama<br>";
        }
    }
    ?>
</body>
</html>
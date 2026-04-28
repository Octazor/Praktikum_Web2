<?php
$errorNama = $errorNim = $errorJk = "";
$nama = $nim = $jk = "";

if (isset($_POST['submit'])) {
    if (empty($_POST["nama"])) {
        $errorNama = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $errorNim = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jk"])) {
        $errorJk = "jenis kelamin tidak boleh kosong";
    } else {
        $jk = $_POST["jk"];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK202</title>
    <style>
        .error { color: red; font-style: italic; }
    </style>
</head>
<body>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?php echo $nama;?>"> 
        <span class="error">* <?php echo $errorNama;?></span><br>
        
        Nim: <input type="text" name="nim" value="<?php echo $nim;?>"> 
        <span class="error">* <?php echo $errorNim;?></span><br>
        
        Jenis Kelamin: <span class="error">* <?php echo $errorJk;?></span><br>
        <input type="radio" name="jk" value="Laki-laki" <?php if (isset($jk) && $jk=="Laki-laki") echo "checked";?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if (isset($jk) && $jk=="Perempuan") echo "checked";?>> Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>

    <?php
    if (!empty($nama) && !empty($nim) && !empty($jk)) {
        echo "<b>Output:</b><br>";
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jk <br>";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data</title>
</head>

<style>
    label,
    textarea {
        vertical-align: middle;
    }
</style>

<body>
    <h1>Masukkan Identitas Anda</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <pre>
        isikan Nama : <input type="text" name="nama"/>
        isikan No Telepon : <input type="text" name="telepon"/>
        isikan Alamat : <textarea name="alamat" id="" cols="40" rows="5"></textarea>
        <input type="submit" value="Tampil"> <input type="reset" value="Batal">
        
    </pre>
    </form>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $telp = isset($_POST['telepon']) ? $_POST['telepon'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    if (!empty($nama)) {
        echo "Nama : $nama <br>";
    }
    if (!empty($telp)) {
        echo "No Telepon : $telp <br>";
    }
    if (!empty($alamat)) {
        echo "Alamat : $alamat <br>";
    }

    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<body>

    <h3>STRUK PEMBELIAN BARANG SEDERHANA</h3>
    <?php

    $tanggal = date('d F Y');
    setlocale(LC_TIME, 'id_ID');
    echo "Tanggal : " . $tanggal, "<br>";

    $nama_pembeli = $_POST['nama_pembeli'];
    echo "Nama : $nama_pembeli", "<hr>";

    $kode_buku = $_POST['kode_buku'];
    if ($kode_buku == "Laskar Pelangi") {
        $pengarang_buku = "Andrea Hirata";
        $harga = 50000;

        echo "Judul Buku : $kode_buku", "<br>";
        echo "Pengarang : $pengarang_buku", "<br>";
        echo "Harga Buku : Rp.$harga", "<br>", "<hr>";
    } elseif ($kode_buku == "Atomic Habits") {
        $pengarang_buku = "James Clear";
        $harga = 80000;

        echo "Judul Buku : $kode_buku", "<br>";
        echo "Pengarang : $pengarang_buku", "<br>";
        echo "Harga Buku : Rp.80000", "<br>", "<hr>";
    } elseif ($kode_buku == "Growth Mindset") {
        $pengarang_buku = "Carol Dweck";
        $harga = 85000;

        echo "Judul Buku : $kode_buku", "<br>";
        echo "Pengarang : $pengarang_buku", "<br>";
        echo "Harga Buku : Rp.$harga", "<br>", "<hr>";
    } elseif ($kode_buku == "Filosofi Teras") {
        $pengarang_buku = "Henry Manampiring";
        $harga = 90000;

        echo "Judul Buku : $kode_buku", "<br>";
        echo "Pengarang : Henry Manampiring", "<br>";
        echo "Harga Buku : Rp.$harga", "<br>", "<hr>";
    } else {
        $pengarang_buku = "Ichiro Kishimi dan Fumitake Koga";
        $harga = 70000;

        echo "Judul Buku : $kode_buku", "<br>";
        echo "Pengarang :  $pengarang_buku", "<br>";
        echo "Harga Buku : Rp.$harga", "<br>", "<hr>";
    }

    $jumlah_beli = $_POST['jumlah_beli'];
    echo "Jumlah Beli : $jumlah_beli", "<br>";

    $total = $harga * $jumlah_beli;
    echo "Total Harga : Rp.$total"
    ?>
</body>

</html>
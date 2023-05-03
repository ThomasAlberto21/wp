<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Mahasiswa</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pekerjaan = $_POST['pekerjaan'];

    ?>



    <table border="1" bgColor="aqua">
        <tr>
            <td colspan="2" align="center">Data Mahasiswa</td>
        </tr>

        <tr align="center">
            <td>Nama</td>
            <td><?php echo $_POST['nama'] ?></td>
        </tr>

        <tr align="center">
            <td>Alamat</td>
            <td><?php echo $_POST['alamat'] ?></td>
        </tr>

        <tr align="center">
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST['jenis_kelamin'] ?></td>
        </tr>

        <tr align="center">
            <td>Pekerjaaan</td>
            <td><?php echo $_POST['pekerjaan'] ?></td>
        </tr>

        <?php
        $hobi_1 = $_POST['hobi_1'];
        $hobi_2 = $_POST['hobi_2'];
        $hobi_3 = $_POST['hobi_3'];
        ?>

        <tr align="Hobi">
            <td>Hobi</td>
            <td><?php echo "$hobi_1 , ", "$hobi_2 , ", "$hobi_3" ?></td>
        </tr>
    </table>

    <a href="formInputMahasiswa.php" align="center">Input Data Lagi</a>
</body>

</html>
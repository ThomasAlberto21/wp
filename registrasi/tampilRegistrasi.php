<!-- Menggunakann table -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>


<body>
    <h1>Data Registrasi</h1>
    <table style="width:30%" border="1">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST['alamat'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $_POST['tempat_lahir'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $_POST['tanggal_lahir'] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST['jenis_kelamin'] ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $_POST['pendidikan'] ?></td>
        </tr>
    </table>
    <a href="formRegistrasi.php">Input Data lagi</a>
</body>

</html>
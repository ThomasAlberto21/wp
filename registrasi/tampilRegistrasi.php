<!-- Menggunakann table -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />


    <style>
        * {
            font-family: 'Poppins';
            max-width: 100%;
            margin: 10px auto;
        }

        .container button {
            padding: 10px 30px;
            background-color: black;
            border: none;
            margin-top: 10px;
            border-radius: 5px;
        }

        .container button a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .container table td {
            padding: 0 5px;
        }
    </style>
</head>


<body>
    <div class="container" align="center">
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
        <button> <a href="formRegistrasi.php">Input Data lagi</a></button>
    </div>
</body>

</html>
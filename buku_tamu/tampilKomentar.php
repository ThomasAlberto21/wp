<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Nama Anda : <?php echo $_POST['nama'] ?> <br>
    Email Anda : <?php echo $_POST['email'] ?> <br>
    Komentar Anda : <?php echo $_POST['komentar'] ?> <br>
    <a href="formKomentar.php">Input Data lagi</a>
</body>

</html>
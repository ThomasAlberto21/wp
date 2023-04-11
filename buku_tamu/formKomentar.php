<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Buku tamu</h1>
    <p>komentar dan saran anda sangat kami butuhkan
        <br> untuk meningkatkan kualitas website kami
    </p>
    <hr>
    <form action="tampilKomentar.php" method="post">
        <label for="">Nama Anda</label> <br>
        <input type="text" name="nama" size="42" class="input-form"> <br>

        <label for="">Email Anda</label> <br>
        <input type="text" name="email" size="42" class="input-form"> <br>

        <label for="">Komentar Anda</label><br>
        <textarea name="komentar" id="" cols="40" rows="10" class="textarea-form"></textarea> <br>
        <input type="submit" value="kirim" class="button">
        <input type="reset" value="batal" class="button">
    </form>

    <!-- <form action="tampilKomentar.php" method="post">

        Nama Anda : <input type="text" name="nama" size="35" class="input-form"> <br>
        Email Anda : <input type="text" name="email" size="35" class="input-form"> <br>
        Kometar Anda : <textarea name="komentar" id="" cols="40" rows="10" class="textarea-form"></textarea> <br>
        <input type="submit" value="kirim" class="button">
        <input type="reset" value="batal" class="button">
    </form> -->


</body>

</html>
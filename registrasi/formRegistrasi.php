<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <h1>Form Registrasi</h1>
    <p>Isi Data Di Bawah Ini :</p>
    <form action="tampilRegistrasi.php" method="post">
        <label for="">Nama</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label for="">Alamat</label> <br>
        <textarea name="alamat" id="" cols="50" rows="5"></textarea>
        <br>
        <label for="">Tempat Lahir</label> <br>
        <input type="text" name="tempat_lahir">
        <br>
        <label for="">Tanggal Lahir</label> <br>
        <input type="text" name="tanggal_lahir">
        <br>
        <label for="">Jenis Kelamin</label> <br>
        <input type="radio" id="" name="jenis_kelamin" value="Laki-laki">
        <label for="">Laki - laki</label>
        <input type="radio" id="" name="jenis_kelamin" value="Perempuan">
        <label for="">Perempuan</label><br>
        <br>
        <label for="">Pendidikan</label>

        <select id="" name="pendidikan">
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit" class="button">
        <input type="reset" value="Reset" class="button">
    </form>
</body>

</html>
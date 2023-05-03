<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>

<body bgcolor="green">
    <form action="tampilMahasiswa.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>
        <pre>
        Nama : <input type="text" name="nama" size="25" maxlength="50">
        Alamat : <input type="text" name="alamat" size="25" maxlength="50">
    </pre>
        Jenis Kelamin :
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan">
        Perempuan
        <p>
            Pekerjaan :
            <select name="pekerjaan" id="pekerjaan">
                <option value="Pelajar">Pelajar</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
        </p>
        <p>
            Hobi :
            <input type="checkbox" name="hobi_1" value="olahraga">Olahraga
            <input type="checkbox" name="hobi_2" value="musik">Musik
            <input type="checkbox" name="hobi_3" value="jalan-jalan">Jalan-jalan
        </p>
        <input type="submit" value="kirim">
        <input type="reset" value="batal">
    </form>
</body>

</html>
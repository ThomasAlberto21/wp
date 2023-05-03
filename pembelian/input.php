<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body>
    <form action="output.php" method="POST">
        <table border="1" align="center">
            <th colspan="2">Form Pembelian Barang Sederhana</th>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli"></td>
            </tr>
            <tr>
                <td>Kode Buku</td>
                <td><select name="kode_buku" id="kode_buku">
                        <option value="Laskar Pelangi">B0001</option>
                        <option value="Atomic Habits">B0002</option>
                        <option value="Growth Mindset">B0003</option>
                        <option value="Filosofi Teras">B0004</option>
                        <option value="Berani Tidak Disukai">B0005</option>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td><input type="number" name="jumlah_beli" max="10"></td>
            </tr>
            <tr>
                <td colspan="2" row align="center">
                    <br>
                    <input type="submit" name="submit" value="Save">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
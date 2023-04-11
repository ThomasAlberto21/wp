<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <style>
    * {
      font-family: 'Poppins';
      max-width: 100%;
      margin: 0 auto;
    }

    .container {
      width: 50%;
      margin: 0 auto;
    }

    .head {
      margin-bottom: 40px;
    }

    form {
      width: 100%;
    }

    form input,
    textarea {
      width: 97%;
      padding: 10px 10px;
      border-radius: 5px;
      border: 1px solid gray;
      margin-bottom: 10px;
    }

    form input[type='radio'] {
      width: 20px;
      margin-bottom: 20px;
    }

    form label {
      font-weight: 500;
    }

    form .button {
      background-color: black;
      color: white;
      font-weight: 600;
      padding: 10px 0;
      width: 100%;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="head">
      <h1>Form Registrasi</h1>
      <p>Isi Data Di Bawah Ini</p>
    </div>
    <form action="tampilRegistrasi.php" method="post">
      <!-- Form Nama -->
      <label for="Nama">Nama</label>
      <br />
      <input type="text" name="nama" placeholder="Masukkan Nama Anda" />
      <br />

      <!-- Form Alamat -->
      <label for="Alamat">Alamat</label> <br />
      <textarea name="alamat" id="" cols="20" rows="5" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
      <br />

      <!-- Form Tempat Lahir -->
      <label for="Tempat Lahir">Tempat Lahir</label> <br />
      <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" />
      <br />

      <!-- Form Tanggal Lahir -->
      <label for="Tanggal Lahir">Tanggal Lahir</label> <br />
      <input type="text" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anda" />
      <br />

      <!-- Form Jenis Kelamin -->
      <label for="Jenis Kelamin">Jenis Kelamin</label>
      <label for="Laki-laki">
        <input type="radio" name="jenis_kelamin" value="Laki-laki" />
        Laki - laki
      </label>
      <label for="Perempuan">
        <input type="radio" name="jenis_kelamin" value="Perempuan" />
        Perempuan
      </label>
      <br />

      <!-- Form Pendidikan -->
      <label for="Pendidikan">Pendidikan</label>
      <select name="pendidikan">
        <option value="SMA">SMA</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
      </select>
      <br />
      <br />
      <button type="submit" value="Submit" class="button">Submit </button>
      <button type="reset" value="Reset" class="button">Reset </button>
    </form>
  </div>
</body>

</html>
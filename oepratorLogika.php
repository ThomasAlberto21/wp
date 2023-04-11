<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php
  $bilangan_1 = 200;
  $bilangan_2 = 40;
  $teks_1 = "PHP";
  $teks_2 = "php";

  $hasil = $bilangan_1 == $bilangan_2;
  echo "$bilangan_1 == $bilangan_2 = $hasil <br>";

  $hasil = $bilangan_1 != $bilangan_2;
  echo "$bilangan_1 != $bilangan_2 = $hasil <br>";

  $hasil = $bilangan_1 >= $bilangan_2;
  echo "$bilangan_1 >= $bilangan_2 = $hasil <br>";

  $hasil = $teks_1 == $teks_2;
  echo "$teks_1 == $teks_2 = $hasil <br>";

  $hasil = $teks_1 != $teks_2;
  echo "$teks_1 !=  $teks_2 = $hasil <br>";

  ?>
</body>

</html>
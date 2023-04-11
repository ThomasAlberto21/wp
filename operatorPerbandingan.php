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
  $bilangan_2 = 20;
  $teks_1 = "PHP";
  $teks_2 = "php";

  $hasil = ($bilangan_1 <> $bilangan_2) or ($teks_1 == $teks_2);
  echo "$bilangan_1 <> $bilangan_2 or $teks_1 == $teks_2 Adalah $hasil <br>";

  $hasil = !($teks_1 == $teks_2);
  echo "!($teks_1 == $teks_2) adalah $hasil";

  ?>
</body>

</html>
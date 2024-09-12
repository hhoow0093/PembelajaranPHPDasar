<?php
// syntax PHP

// standard output
// echo, print
// print_r
// var_dump

// echo "Howard<br/>";
// print "Howard<br/>";
// print_r("Howard<br/>");
// var_dump("Howard<br/>");

//boolean
// echo false; 
// echo "<br/>" . true . "<br/>";

// penulisan syntax php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// $nama = "howard";
// echo "halo nama saya $nama";

// operator
// + - * / %
// $x = 10;
// $y = 20;
// echo "hasilnya adalah" . " ". 20 % 10;

// assignment
// = += -= *= /= %= .=
// $x = 1;
// $x -= 5;
// echo $x . "<br/>";
// $nama_saya = "Howard";
// $nama_saya .= " ";
// $nama_saya .= "Dai";
// echo $nama_saya;

// perbandingan tidak cek tipe data
// <, >, >= , <=, ==, !=
// var_dump(1 == "1");

// identitas akan cek tipe data
// === !===
// var_dump(1 === 1);

// operator logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 === 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<!-- penulisan PHP di dalam HTML-->
<!--
    <h1>selamat datang <?php// echo $nama;?></h1>
    <p><?php// echo "ini adalah sebuah paragraf"?></p>
-->

<!--penulisan HTML di dalam PHP-->
<?php
//echo "<h1>selamat datang howard</h1>"
?>

</body>
</html>
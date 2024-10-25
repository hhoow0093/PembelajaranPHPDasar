<?php
// super global pada PHP (tipenya adalah array associative)
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
 
// var_dump($_GET);
// echo"<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER);

// echo $_SERVER["MIBDIRS"];

// mencoba experimen superglobal variabel GET
// $_GET["Nama"] = "Howard";
// $_GET["NIM"] = "00000099772";
var_dump($_GET);

// http://localhost/menyimpanfilephp/wpu-tutorial/pertemuan8/latihan2.php?nama=howard&NIM=99772
// ini artinya saya akan masukkan data nama(key) = howard(value) ke dalam associative array super global variabel $_GET
// & berfungsi untuk menambahkan data key dan value
// kalau di var_dump, maka akan mengeluarkan isi associative array
/*
array(2) {
  ["nama"]=>
  string(6) "howard"
  ["NIM"]=>
  string(5) "99772"
}
 */ 
?>


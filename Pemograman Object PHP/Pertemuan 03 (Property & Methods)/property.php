<?php
//  jualan produk
// komik
// game
class Produk{
    //assign nilai property secara default
    public  $judul = "judul",
            $penerbit = "penerbit",
            $penulis = "penulis",
            $harga = 0;
}
// $produk1 = new Produk();
// menimpah nilai default judul jadi Naruto
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// menambahkan property baru di luar itu boleh, tadpi tidak di sarankan
// $produk2->hahaha = "hahahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Shonen Jump";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = 30000;
var_dump($produk3);
?>
<?php
class Produk
{
    //assign nilai property secara default
    public  $judul = "judul",
        $penerbit = "penerbit",
        $penulis = "penulis",
        $harga = 0;

    // assign method dalam sebuah class
    public function sayHello()
    {
        return "Helloo! <br>";
    }

    // method yang menggunakan property agar print hasil produk. 
    // $this untuk mengambil isi property dalam kelas. 
    // isinya object yang memanggil class
    public function printProduct(){
        return "<br> Judul: " . $this->judul . "<br> Penerbit: " . $this->penerbit . "<br> Penulis: " . $this->penulis . "<br> Harga: " . $this->harga . "<br>";
    } 
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Shonen Jump";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = 30000;
// var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;

// echo "Komik : $produk3->judul, $produk3->penerbit <br>";
// menggunakan method dalam sebuah class
// echo $produk3->sayHello();
echo $produk3->printProduct();
echo $produk4->printProduct();

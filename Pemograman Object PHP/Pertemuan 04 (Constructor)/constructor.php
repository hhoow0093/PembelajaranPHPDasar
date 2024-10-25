<?php
//  jualan produk
// komik
// game
class Produk
{
    //assign nilai property secara default
    public  $judul,
        $penerbit,
        $penulis,
        $harga;

    // membuat method untuk scontruct sebuah property.
    // __construct akan otomatis dipanggil ketika memanggil nama function.
    public function __construct($judul = "judul" , $penerbit = "penerbit", $penulis = "penulis", $harga = "harga") // parameter dalam 'new Produk'
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    // method yang menggunakan property agar print hasil produk. 
    // $this untuk mengambil isi property dalam kelas. 
    // isinya object yang memanggil class
    public function printProduct()
    {
        return "<br> Judul: " . $this->judul . "<br> Penerbit: " . $this->penerbit . "<br> Penulis: " . $this->penulis . "<br> Harga: " . $this->harga . "<br>";
    }
}


$produk1 = new Produk("Naruto", "Shonen Jump", "Masashi kishimoto", 30.000);
echo $produk1->printProduct();

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250.000);
echo $produk2->printProduct();

$produk3 = new Produk("Dragon ball");
echo $produk3->printProduct();

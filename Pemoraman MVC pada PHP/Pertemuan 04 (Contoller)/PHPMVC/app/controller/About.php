<?php
class About{
    public function page()
    {
        echo 'About/page';
    }
    public function index($nama = "nama", $pekerjaan = "kerja")
    {
        echo "halo namaku $nama dan pekerjaanku adalah $pekerjaan";
    }
} 
?>
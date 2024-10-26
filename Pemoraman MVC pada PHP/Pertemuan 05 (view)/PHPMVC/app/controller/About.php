<?php
class About extends Controller{
    public function page()
    {
        // echo 'About/page';
        $data["hal"] = "about";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    public function index($nama = "nama", $pekerjaan = "kerja", $umur = 1)
    {
        // /about/index/Howard/mahasiswa/19
        // bekerja harus sesuai dengan urutan parameter method index
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $data["hal"] = "about";
        // echo "halo namaku $nama dan pekerjaanku adalah $pekerjaan";
        $this->view('templates/header', $data);
        $this->view('about/index' , $data);
        $this->view('templates/footer');
    }
} 
?>
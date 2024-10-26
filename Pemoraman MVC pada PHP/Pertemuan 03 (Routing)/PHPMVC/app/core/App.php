<?php
class App{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }
    public function parseURL()
    {
        if(isset($_GET["url"])){
            $url = rtrim($_GET["url"], '/'); // hapus '/' akhir pada url
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url biar gak ada yang aneh
            $url = explode('/', $url);
            return $url;
        }

    }
} 
?>
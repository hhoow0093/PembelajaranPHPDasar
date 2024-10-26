<?php
class App
{
    protected
    //default
        $controller = "Home",
        $method = "index",
        $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        
        // cek jika url yang diketikkan pada index 0 ada pada di folder contoller
        if ($url !== null && file_exists('../app/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]); // membuktikan controller emang ada dan akan di unset lalu di var dump
            // var_dump($url);
        }
        // dari pov index.php. makannya pakai ../app, begitu juga dengan yang atas.
        require "../app/controller/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
             }
            //else{ 
            //     //jika method tidak ada, maka akan membalikkan ke url default
            //     $this->controller = "home";
            //     require "../app/controller/" . $this->controller . ".php";
            //     $this->controller = new $this->controller;
            //     $this->method = "index";
            // }
        }

        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan contoller & method, serta kirimkan params jika ada.
        call_user_func_array([$this->controller, $this->method], $this->params);

    }
    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/'); // hapus '/' akhir pada url
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url biar gak ada yang aneh
            $url = explode('/', $url);
            return $url;
        }
    }
}

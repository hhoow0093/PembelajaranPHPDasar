<?php
class Home extends Controller{
    public function index()
    {
        // echo "home/index";
        // method view akan disimpan dalam folder core controlller .php
        $data["hal"] = "index";
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
} 
?>
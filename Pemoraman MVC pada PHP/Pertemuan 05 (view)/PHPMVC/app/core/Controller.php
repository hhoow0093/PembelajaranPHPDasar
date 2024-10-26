<?php 
class Controller{
    // method view
    public function view($view, $data = []){
        require_once "../app/views/" . $view . ".php";
    }
}
?>
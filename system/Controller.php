<?php

class Controller{
    public function view ($nome){
        
        return require_once ("app/views/" . $nome . ".html");
    }
}

?>
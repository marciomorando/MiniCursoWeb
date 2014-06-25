<?php

class Controller{
    public function view ($nome, $dados){
        
        extract($dados);
        
        
        
        return require_once ("app/views/" . $nome . ".html");
    }
}

?>
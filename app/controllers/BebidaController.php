<?php

class Bebida extends Controller{
    
    public function index(){
        $this->view("bebida-index");
    }


    public function listar(){
        
        $this->view("bebida-listar");
        
    }
    
    public function incluir(){
        
        
        $bebidasModel = new BebidaModel();
        $bebidasModel->inserirBebida("1", "Pepsi");
        
        
    }
}
?>
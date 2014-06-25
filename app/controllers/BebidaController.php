<?php

class Bebida extends Controller{
    
    public function index(){
        $this->view("bebida-index");
    }


    public function listar(){
        
           $bebidasModel = new BebidaModel();
          $result = $bebidasModel->consultarBebidas();
          
            $dados['linhas'] = $result;
            
            $this->view("bebida-listar",$dados);    
     
    }
    
    public function incluir(){
        
        
       // $bebidasModel = new BebidaModel();
       // $bebidasModel->inserirBebida("2", "Coca Cola");
        $this->view("bebida-incluir");
        
        
    }
    
    public function efetiva_inclusao(){
        
        $bebidaModel = new BebidaModel();
        $bebidaModel->inserirBebida($_POST['id'],$_POST['nome']);        
    }
    
      public function listar1(){
        
           $bebidasModel = new BebidaModel();
          $result = $bebidasModel->consultarBebida('1');
          
            $dados['linhas'] = $result;
            
            $this->view("bebida-listar",$dados);    
     
    }
    
    public function alterar(){
        
        $bebidasModel = new BebidaModel();
        $bebidasModel->alterarNome("1", "caipirinha");
        
    }
    
    public function apagar(){
        $bebidasModel = new BebidaModel();
        $bebidasModel->apagarId("1");
    }
}
?>
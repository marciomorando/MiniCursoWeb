<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BebidaModel
 *
 * @author MarcioMorando
 */
class BebidaModel extends Model {
    //put your code here
    public function inserirBebida($id,$nome){
        $dados = array(
            "ID" => $id,
            "NOME" => $nome
        );
        
        $this->insert('BEBIDA',$dados);
        
        header("Location: /minicurso/bebida/listar");
    }
    
    public function consultarBebidas(){
        
        return $this->select("bebida");
    }
    
    public function consultarBebida($id){
        
        return $this->select("bebida", "id = ".$id);
    }
    
    public function alterarNome($id, $nome){
        
        $dados = array(
            
          "nome" => $nome
        
        );
        
        $this->update("bebida", $dados, "id = ". $id);
    }
    
    public function apagarId($id){
    
        $this->delete("bebida", "id = ". $id);
    } 
    
}

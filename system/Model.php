<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author MarcioMorando
 */
class Model {
    public function __construct() {
        if(mysql_connect("localhost","root","")){;
mysql_select_db("minicurso");
        }else{
            die("erro");
        
    }
    }

    
    public function insert ($tabela, Array $dados){
        
        foreach($dados as $key => $value){
            $colunas .= ",".$key;
            $valores .= ",'".$value."'";
        }
        
            $colunas = substr($colunas, 1);
            $valores = substr($valores, 1);
            
            $sql = "INSERT INTO ". $tabela . "(".$colunas.") VALUES (".$valores.");";
            
            mysql_query($sql);
        
    }
}

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
    
    public function select($tabela, $where = null){
        
        
        $where = ( $where != null ? " WHERE ".$where : '' );
        
        $sql = "SELECT * FROM ". $tabela. $where .";";
        
        $result = mysql_query($sql);
        
        //transformar o result em array
        while($linha = mysql_fetch_assoc($result))
                $result_array[] = $linha;
        
            return($result_array);
    }
    
    public function update($tabela , Array $dados, $where){
        
        foreach ($dados as $key => $value){
            $sets[] = $key ." = '". $value ."'";
            
        }
        
        $sets = implode(", ", $sets);
        
        $sql = "UPDATE ". $tabela ." SET ". $sets ." WHERE ". $where. ";";
        
        mysql_query($sql);
        
}

        protected function delete($tabela, $where){
            
            $sql = " DELETE FROM ". $tabela ." WHERE ". $where .";";
            mysql_query($sql);
            
                    
        }
}
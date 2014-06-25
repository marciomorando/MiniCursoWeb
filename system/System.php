<?php

class System{
    
    public  $url;
    public $urlExplodida;
    public $controller;
    public $action;
    
    public function __construct(){
        
        $this->setUrl();
        $this->setUrlExplodida();
        $this->setController();
        $this->setAction();
}
    
    public function setUrl(){
   
        //ternario - testa se esta vazia se estiver fica index index
        $this->url = ( $_GET['url'] == '' ? "index/index" : $_GET['url'] );
        
    }
    
    public function setUrlExplodida(){
        $this->urlExplodida = explode("/",$this->url);
    }

    public function setController(){
        $this->controller = $this->urlExplodida[0];
    }
    
    public function setAction(){
        $this->action = ($this->urlExplodida[1] == '' ? "index" : $this->urlExplodida[1]);
    }
    
    public function run($param) {
        
        require_once ("app/controllers/" . $this->controller . "Controller.php");
        
        $controller = new $this->controller();
        $action = $this->action;
        $controller->$action();
    }
}

?>
<?php

$url = $_GET['url'];

//ternario - testa se esta vazia se estiver fica index index
$url = ( $url == '' ? "index/index" : $url);

//explode a string para montar um array
$url_explodida = explode("/",$url);

$controller = $url_explodida[0];

//ternario
//se = ? senao = :
$action = ($url_explodida[1] == '' ? "index" : $url_explodida[1]);

//importa arquivo
require_once ("system/Controller.php");
require_once ("system/Model.php");

function __autoload($file){
    require_once ("app/models/".$file.".php");
}

require_once ("app/controllers/" . $controller . "Controller.php");

$obj = new $controller();
$obj->$action();

?>

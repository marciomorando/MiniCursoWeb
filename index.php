<?php



//explode a string para montar um array




//ternario
//se = ? senao = :


//importa arquivo
require_once ("system/System.php");
require_once ("system/Controller.php");
require_once ("system/Model.php");

function __autoload($file){
    require_once ("app/models/".$file.".php");
}






$app = new System();

$app->run();

?>

<?php 
require('./dados.php');


$controller = 'index';

if(isset($_SERVER['PATH_INFO'])) {
    //$infoscontrollerReplace = ["/"];
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}



require "controllers/{$controller}.controller.php";

?>
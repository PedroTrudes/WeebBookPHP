<?php 
require('./dados.php');

$idByParams = $_REQUEST['id'];

$filterBook = array_filter($livros, function($l) use($idByParams){
    return $l['id'] == $idByParams;
});


$book = array_pop($filterBook);

$view = "livro";

require "views/template/app.php";
?>
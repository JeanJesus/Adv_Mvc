<?php
$item = $_GET['item'];
if($item =="CadastrarCliente"){
    include_once ('CadastrarCliente.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="CadastrarAdvogados"){
    include_once ('../View/CadastrarAdvogados.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =="charts"){
    include_once ('../View/charts.php');
    }else{
      include_once "../View/inicial.php";
}

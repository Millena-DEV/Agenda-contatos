<?php

Class ClienteController {
public static function index(){
    include 'Model/ClienteModel.php';
    $model = new ClienteModel();
    $model ->getAllRows();
    include 'View/Modules/Cliente/ListaCliente.php';
   
}
public static function form (){
    include 'Model/ClienteModel.php';
    $model = new ClienteModel();
    if(isset($_GET['id']))
    $model = $model-> getbyid((int)$_GET['id']);
   
    include 'View/Modules/Cliente/FormCliente.php';
}

public static function save(){
    include 'Model/ClienteModel.php';
    $model = new ClienteModel();
    $model-> nome = $_Post ['name'];
    $model-> cpf = $_Post ['cpf'];
    $model-> cnpj= $_Post ['cnpj'];
    $model-> numero = $_Post ['numero'];
    $model-> bairro = $_Post ['bairro'];
    $model-> cidade = $_Post ['cidade'];
    $model-> estado = $_Post ['estado'];
    $model-> email = $_Post ['email'];
    $model-> telefone = $_Post ['telefone'];
$model -> save();
header("location:/cliente");
}



}
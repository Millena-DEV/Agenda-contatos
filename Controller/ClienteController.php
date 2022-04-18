<?php

Class ClienteController {
public static function index(){
    include 'View/Modules/Cliente/ListaCliente.php';
}
public static function form (){
    include 'View/Modules/Cliente/FormCliente.php';
}

public static function save(){
    var_dump($_POST);
}



}
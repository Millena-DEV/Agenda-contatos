<?php

class ClienteDAO
{
    private $conexao;
    public function __construct(){
        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_banco";
        $conexao = new PDO ('dsn','root','1234');

    }
    
        
    

    public function insert (){

    }

    public function updat(){

    }

    public function select (){

    }

    public function delete(){

    }
}

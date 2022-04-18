<?php

class ClienteModefa
{
    public $id,$nome,$idPessoa_fisica,$idPessoa_juridica,$idEndereco;

    public function save(){
        include 'DAO/ClienteDAO.php';

        $dao = new ClienteDAO();

        $dao -> insert();
    }





}

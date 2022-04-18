<?php

class ClienteModel
{
    public $id,$nome,$idPessoa_fisica,$idPessoa_juridica,$idEndereco;
public $rows;
    public function save(){
        include 'DAO/ClienteDAO.php';

        $dao = new ClienteDAO();

        $dao -> insert($this);
    }
public function getAllRows(){
    include 'DAO/ClienteDAO.php';
    $dao= new ClienteDAO;
   $this->rows-> $dao->select();
}




}

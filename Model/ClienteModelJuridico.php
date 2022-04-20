<?php

class ClienteModelJuridico
{
    public $idCliente,$nome,$idPessoa_juridica,$idPessoa_Fisica,$idEndereco;
public $rows;
    public function save(){
        include 'DAO/ClienteDAO.php';

        $dao = new ClienteJuridicoDAO();

        $dao -> insert($this);
    }
public function getAllRows(){
    include 'DAO/ClienteJuridicoDAO.php';
    $dao= new ClienteJuridicoDAO;
   $this->rows-> $dao->select();
}




}

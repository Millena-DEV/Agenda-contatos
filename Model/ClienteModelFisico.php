<?php

class ClienteModelFisico
{
    public $idPessoa_Fisica,$cpf;
public $rows;
    public function save(){
        include 'DAO/ClienteDAO.php';

        $dao = new ClienteFisicoDAO();

        $dao -> insert($this);
    }
public function getAllRows(){
    include 'DAO/ClienteJuridicoDAO.php';
    $dao= new ClienteFisicoDAO;
   $this->rows-> $dao->select();
}




}

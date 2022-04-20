<?php

class ClienteModelJuridico
{
    public $idPessoa_juridica,$cnpj;
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
public function getbyid(int $idPessoa_juridica)
{
    include 'DAO/ClienteJuridicoDAO.php';
    $dao = new ClienteDAO();
    return $dao->selectbyid('idPessoa_juridica');
    if ($obj) {
        return  $obj;
    } else {
        return new ClienteModelJuridico();
    }
}



}

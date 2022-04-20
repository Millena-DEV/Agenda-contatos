<?php

class ClienteModelFisico
{
    public $idPessoa_Fisica, $cpf;
    public $rows;
    public function save()
    {
        include 'DAO/ClienteDAO.php';

        $dao = new ClienteFisicoDAO();

        $dao->insert($this);
    }
    public function getAllRows()
    {
        include 'DAO/ClienteJuridicoDAO.php';
        $dao = new ClienteFisicoDAO;
        $this->rows->$dao->select();
    }

    public function getbyid(int $idPessoa_Fisica)
    {
        include 'DAO/ClienteDAO.php';
        $dao = new ClienteDAO();
        return $dao->selectbyid('idPessoa_Fisica');
        if ($obj) {
            return  $obj;
        } else {
            return new ClienteModelFisico();
        }
    }
}

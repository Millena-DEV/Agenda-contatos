<?php

class TipoContatoModel
{
    public $email, $telefone;
    public $rows;
    public function save()
    {
        include 'DAO/TipoContatoDAO.php';

        $dao = new TipoContatoDAO();

        $dao->insert($this);
    }
    public function getAllRows()
    {
        include 'DAO/TipoContatoDAO.php';
        $dao = new TipoContatoDAO;
        $this->rows->$dao->select();
    }

    public function getbyid(int $idTipoContato)
    {
        include 'DAO/TipoContatoDAO.php';
        $dao = new ClienteDAO();
        return $dao->selectbyid('idTipo_Contato');
        if ($obj) {
            return  $obj;
        } else {
            return new TipoContatoModel();
        }
    }
}

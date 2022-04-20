<?php

class ContatoModel
{
    public $idContato,$idTipoContato,$idCliente;
public $rows;
    public function save(){
        include 'DAO/ContatoDAO.php';

        $dao = new ContatoDAO();

        $dao -> select($this);
    }
public function getAllRows(){
    include 'DAO/ContatoDAO.php';
    $dao= new ContatoDAO;
   $this->rows-> $dao->select();
}




}

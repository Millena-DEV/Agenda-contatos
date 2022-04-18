<?php

class EnderecoModel
{
    public $id,$cep,$numero,$cidade,$bairro;
public $rows;
    public function save(){
        include 'DAO/EnderecoDAO.php';

        $dao = new EnderecoDAO();

        $dao -> insert($this);
    }
public function getAllRows(){
    include 'DAO/EnderecoDAO.php';
    $dao= new EnderecoDAO;
   $this->rows-> $dao->select();
}




}

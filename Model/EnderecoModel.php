<?php

class EnderecoModel
{
    public $idEndereco,$cep,$numero,$cidade,$bairro;
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
public function getbyid(int $idCliente){
    include 'DAO/EnderecoDAO.php';
    $dao = new ClienteDAO();
    return $dao-> selectbyid('idendereco');
    if($obj)
        {
            return  $obj;
        } else {
            return new ClienteModel();
        }


    }

}

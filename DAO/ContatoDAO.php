<?php

class ContatoDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    
   

    public function select()
    {
        $sql = "SELECT * FROM tipo_contato";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

    public function selectbyid(int $tipo_contato){

        include_once 'Model/ContatoModel.php';
        $sql = "SELECT * FROM contato WHERE idtipo_contato = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$id);
        $stm -> execute();
        return $stm-> fetchobject("ContatoModel");
    }
 
}

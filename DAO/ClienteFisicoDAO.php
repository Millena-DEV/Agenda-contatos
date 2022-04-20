<?php

class ClienteFisicoDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    public function insert(ClienteModelFisico $model)
    {
        $sql = "INSERT INTO pessoa_fisica(cpf) values (?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->cpf);
        $stm->execute();
        
    }

    public function update(ClienteModelFisico $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa_fisica";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }
    public function selectbyid(int $idPessoa_Fisica){

        include_once 'Model/ClienteModelFisico.php';
        $sql = "SELECT * FROM pessoa_fisica WHERE idpessoa_fisica = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$idPessoa_Fisica);
        $stm -> execute();
        return $stm-> fetchobject("ClienteModelFisico");
    }
    
 
}

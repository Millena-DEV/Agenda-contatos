<?php

class ClienteJuridicoDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    public function insert(ClienteModelJuridico $model)
    {
        $sql = "INSERT INTO pessoa_juridica(cnpj) values (?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->cnpj);
        $stm->execute();
        
    }

    public function update(ClienteModelJuridico $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa_juridica";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }
    public function selectbyid(int $idpessoa_juridica){

        include_once 'Model/ClienteModelJuridico.php';
        $sql = "SELECT * FROM pessoa_juridica WHERE idpessoa_juridica = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$idpessoa_juridica);
        $stm -> execute();
        return $stm-> fetchobject("ClienteModelJuridico");
    }
    
 
}

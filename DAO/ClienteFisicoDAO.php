<?php

class ClienteFisicoDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    public function insert(ClienteModelFisico $model)
    {
        $sql = "INSERT INTO cliente(nome,) values (?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->cpf);
        $stm->execute();
        
    }

    public function update(ClienteModelFisico $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM cliente";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }
    
 
}

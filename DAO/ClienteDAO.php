<?php

class ClienteDAO
{
    private $conexao;


    public function __construct()
    {        
        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
          $conexao =new PDO('dsn', 'postgres', 'root');
    }

    public function insert(ClienteModel $model)
    {
        $sql = "INSERT INTO cliente(nome) values (?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->nome);
        $stm->execute();
    }

    public function update(ClienteModel $model)
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

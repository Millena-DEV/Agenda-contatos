<?php

class ContatoDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    public function insert(ClienteModel $model)
    {
      
        
    }

   

    public function select()
    {
        $sql = "SELECT * FROM cliente";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

  
    
 
}

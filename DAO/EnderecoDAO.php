<?php

class EnderecoDAO
{
    private $conexao;


    public function __construct()
    {
        
        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
          $conexao =new PDO('dsn', 'root', '1234');
    }




    public function insert(EnderecoModel $model)
    {
        
        $sql = "INSERT INTO endereco(cep,numero,cidade,bairro) values (?,?,?,?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->cep);
        $stm->bindvalue(2, $model->numero);
        $stm->bindvalue(3, $model->cidade);
        $stm->bindvalue(4, $model->bairro);
        $stm->execute();
    }

    public function update(EnderecoModel $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM endereco";

        $stm = $this ->conexao -> prepare($sql)->execute();
        

        return $stm -> fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }

    public function selectbyid(int $idendereco){

        include_once 'Model/EnderecoModel.php';
        $sql = "SELECT * FROM endereco WHERE idendereco = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$id);
        $stm -> execute();
        return $stm-> fetchobject("EnderecoModel");
    }
    
 
}

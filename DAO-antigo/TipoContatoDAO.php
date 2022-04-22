<?php

class TipoContatoDAO
{
    private $conexao;


    public function __construct()
    {
        
        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
          $conexao =new PDO('dsn', 'root', '1234');
    }




    public function insert(TipoContatoModel $model)
    {
        $sql = "INSERT INTO tipocontato(email,telefone) values (?,?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->email);
        $stm->bindvalue(2, $model->telefone);

        $stm->execute();
    }

    public function update(TipoContatoModel $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM tipocontato";
        $stm = $this ->conexao -> prepare($sql)->execute();
        

        return $stm -> fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }
    public function selectbyid(int $idtipocontato){

        include_once 'Model/TipoContatoModel.php';
        $sql = "SELECT * FROM TipoContato WHERE idtipocontato = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$id);
        $stm -> execute();
        return $stm-> fetchobject("TipoContatoModel");
    }
    
 
}

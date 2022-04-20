<?php

class ClienteDAO
{
    private $conexao;


    public function __construct()
    {        

        $dsn = "pgsql:host=localhost;port=5432;dbname=Agenda_contatos";
        $conexao = new PDO('dsn', 'postgres', '1234');

    }

    public function insert(ClienteModel $model)
    {
        $sql = "INSERT INTO cliente(nome) values (?)";
        $stm = $this->conexao->prepare($sql);
        $stm->bindvalue(1, $model->nome);
        

      $sql= "SELECT cliente.idcliente, endereco.idEndereco,
      PessoaFisica.idPessoa_Fisica, PessoaJuridica.idPessoa_Juridica,
      TipoContato.idcliente,Contatos.idCliente,
      Contatos.idTipocontato
       FROM cliente
       INNER JOIN  endereco.idendereco
       ON cliente.idcliente =  endereco.idendereco
       INNER JOIN   PessoaFisica.idPessoa_Fisica
       ON cliente.idcliente = PessoaFisica.idPessoa_Fisica
       INNER JOIN  PessoaJuridica.idPessoa_Juridica
       ON cliente.idcliente = PessoaJuridica.idPessoa_Juridica
       INNER JOIN  TipoContato.idcliente
       ON cliente.idcliente = TipoContato.idcliente
       INNER JOIN  Contatos.idCliente
       ON cliente.idcliente =Contatos.idTipocontato";
       $stm->execute();
    }

    public function update(ClienteModel $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM cliente ";
        $stm = $this->conexao->prepare($sql)->execute();
        

        return $stm->fetcALL(PDO::FETCH_CLASS);
    }

    public function delete()
    {
    }

    public function selectbyid(int $idcliente){

        include_once 'Model/ClienteModel.php';
        $sql = "SELECT * FROM cliente WHERE idcliente = ? ";

        $stm = $this->conexao->prepare($sql);
        $stm -> binvalue (1,$idcliente);
        $stm -> execute();
        return $stm-> fetchobject("ClienteModel");
    }
    
 
}

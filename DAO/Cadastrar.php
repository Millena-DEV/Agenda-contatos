<?php

session_start();

ob_start();
include_once "conexao.php";

$dados - filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if (!empty($dados['CadUsuario'])) {
  $query_cliente =  "INSERT INTO cliente
   (nome,idpessoa_fisica,idpessoa_juridica,idendereco) values 
   (:nome,:idpessoa_fisica,:idpessoa_juridica,:idendereco) ";
  $cad_cliente = $conn->prepare($query_cliente);
  $cad_cliente->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
  $cad_cliente->bindParam(':idpessoa_fisica', $id_pessoafisica, PDO::PARAM_STR);
  $cad_cliente->bindParam(':idpessoa_juridica', $id_pessoajuridica, PDO::PARAM_STR);
  $cad_cliente->bindParam(':idendereco', $id_endereco, PDO::PARAM_INT);
  $cad_cliente->execute();
  //var_dump($conn->lastInsertId());
  $id_cliente = $conn->lastInsertId();


  $query_endereco = "INSERT INTO endereco
(logadouro,cep,numero,bairro,cidade,estado)values
(:logadouro,:cep,:numero,:bairro,:cidade,:estado)";
  $cad_endereco = $conn->prepare($query_endereco);
  $cad_endereco->bindParam(':logadouro', $dados['logadouro'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
  $cad_endereco->execute();
  //var_dump($conn->lastInsertId());
  $id_endereco = $conn->lastInsertId();

  $query_pessoafisica = "INSERT INTO pessoa_fisica
(cpf) values
(:cpf)";
  $cad_pessoafisica = $conn->prepare($query_pessoafisica);
  $cad_pessoafisica->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
  $cad_pessoafisica->execute();
  $id_pessoafisica = $conn->lastInsertId();


  $query_pessoajuridica = "INSERT INTO pessoa_juridica
(cnpj) values
(:cnpj)";
  $cad_pessoajuridica = $conn->prepare($query_pessoajuridica);
  $cad_pessoajuridica->bindParam(':cnpj', $dados['cnpj'], PDO::PARAM_STR);
  $cad_pessoajuridica->execute();
  $id_pessoajuridica = $conn->lastInsertId();

  $query_tipocontato = "INSERT INTO tipo_contato
(email,telefone) values
(:email,:telefone)";
  $cad_tipocontato = $conn->prepare($query_tipocontato);
  $cad_tipocontato->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  $cad_tipocontato->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
  $cad_tipocontato->bindParam(':idcliente', $id_cliente, PDO::PARAM_INT);
  $cad_tipocontato->execute();

  $_SESSION['msg'] = " <p style = 'color: green'> Cadastrado com sucesso! </p>";

  header("location: index.php");
} else {
  echo "erro";
}

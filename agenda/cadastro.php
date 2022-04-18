<?php
include 'conectar.php';

$cliente = $_POST['nome'];


$endereco = $_POST ['logadouro,cep,numero,cidade,bairro,estado'];
$Tipo_Contato = $_POST ['email,telefone'];

$logadouro = $_POST ['logadouro'];
$cep = $_POST['cep'];
$numero = $_POST ['numero'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$bairro = $_POST ['bairro'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];

// >>>>>>> main
$PessoaFisica = $_POST ['cpf'];
$PessoaJuridica = $_POST ['cnpj'];

$recebendo_Endereco = "INSERT INTO Endereco (logadouro,cep,numero,bairro,cidade,estado) VALUES ('$logadouro','$cep','$numero','$cidade,'$estado','$bairro')";

// <<<<<<< HEAD
$recebendo_PessoaFisica  = "INSERT INTO PessoaFisica (cpf) VALUES ('$cpf')";

$recebendo_PessoaJuridica  = "INSERT INTO PessoaJuridica (cnpj) VALUES ('$cnpj')";

$recebendo_Tipo_Contato= "INSERT INTO Tipo_Contato (email,telefone) VALUES ('$email','$telefone')";

$recebendo_cadastros = "INSERT INTO Cliente(nome,idEndereco,idTipo_Contato,idPessoa_Fisica,idPessoa_Juridica)  VALUES (LAST_INSERT_ID(),'$nome','$email','$telefone','$cpf','$cnpj','$logadouro','$cep','$numero','$cidade,'$estado','$bairro')";

$recebendo_cadastros = "INSERT INTO Cliente('nome,logadouro,cep,numero,cidade,estado,bairro,email,telefone,cpf,cnpj')
 VALUES (LAST_INSERT_ID(),'$nome','$email','$telefone','$cpf','$cnpj','$logadouro','$cep','$numero','$cidade,'$estado','$bairro')";

$stmt = $obj_mysqli->prepare("SELECT * FROM `cliente` WHERE id = ?"); 
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$aux_query = $result->fetch_assoc();

$cliente = $aux_query['nome'];
$logadouro = $aux_query ['logadouro'];
$cep = $aux_query['cep'];
$numero = $aux_query['numero'];
$cidade = $aux_query['cidade'];
$estado = $aux_query ['estado'];
$bairro = $aux_query['bairro'];
$email = $aux_query['email'];
$telefone =$aux_query ['telefone'];
$PessoaFisica = $aux_query ['cpf'];
$PessoaJuridica = $aux_query ['cnpj'];

$stmt->close();

// >>>>>>> main

$query_cadastros = pg_query($con, $recebendo_cadastros) or die(pg_last_error($con));

header('location: index.php');

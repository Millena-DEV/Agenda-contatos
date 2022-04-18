<?php
include 'conectar.php';

$cliente = $_POST['nome'];
$logadouro = $_POST ['logadouro'];
$cep = $_POST['cep'];
$numero = $_POST ['numero'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$bairro = $_POST ['bairro'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$PessoaFisica = $_POST ['cpf'];
$PessoaJuridica = $_POST ['cnpj'];



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


$query_cadastros = pg_query($con, $recebendo_cadastros) or die(pg_last_error($con));

header('location: index.php');

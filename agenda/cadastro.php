<?php
include 'conectar.php';

$cliente = $_POST['nome'];
$endereco = $_POST ['logadouro,cep,numero,cidade,bairro,estado'];
$Tipo_Contato = $_POST ['email,telefone'];
$PessoaFisica = $_POST ['cpf'];
$PessoaJuridica = $_POST ['cnpj'];

$recebendo_Endereco = "INSERT INTO Endereco (logadouro,cep,numero,bairro,cidade,estado) VALUES ('$logadouro','$cep','$numero','$cidade,'$estado','$bairro')";

$recebendo_PessoaFisica  = "INSERT INTO PessoaFisica (cpf) VALUES ('$cpf')";

$recebendo_PessoaJuridica  = "INSERT INTO PessoaJuridica (cnpj) VALUES ('$cnpj')";

$recebendo_Tipo_Contato= "INSERT INTO Tipo_Contato (email,telefone) VALUES ('$email','$telefone')";

$recebendo_cadastros = "INSERT INTO Cliente(nome,idEndereco,idTipo_Contato,idPessoa_Fisica,idPessoa_Juridica)  VALUES (LAST_INSERT_ID(),'$nome','$email','$telefone','$cpf','$cnpj','$logadouro','$cep','$numero','$cidade,'$estado','$bairro')";

$query_cadastros = pg_query($con, $recebendo_cadastros) or die(pg_last_error($con));

header('location: index.php');

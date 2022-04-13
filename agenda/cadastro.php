<?php
include 'conectar.php';

$cod = $_POST['cod'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$email2 = $_POST['email2'];

$recebendo_cadastros = "INSERT INTO contatos

    (nome, email, email2, telefone, telefone2)

    VALUES ('$nome', '$email', '$email2', '$telefone', '$telefone2')";

$query_cadastros = pg_query($con, $recebendo_cadastros) or die(pg_last_error($con));

header('location: index.php');

<?php
include 'conectar.php';

$cod = $_POST['cod'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$email2 = $_POST['email2'];


$buscar_cadastros = "UPDATE contatos set nome='$nome' email='$email' email2='$email2' telefone=' $telefone' telefone2='$telefone2

    VALUES ('$nome', '$email', '$email2', '$telefone', '$telefone2')";

$query="UPDATE contatos 
        SET (nome,email, email2, telefone, telefone2) = 
        ('$nome', '$email', '$email2', '$telefone', '$telefone2')
        WHERE cod= '$cod'";

$query_editar = pg_query($con, $query) or die(pg_last_error($con));

header('location: index.php');
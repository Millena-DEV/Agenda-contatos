<?php
include 'conectar.php';
$cod = $_POST['cod'];


$recebendo_cadastros = "DELETE from contatos
where cod = '$cod'";


$query_cadastros = pg_query($con, $recebendo_cadastros) or die(pg_query($con));;

header('location: index.php');
<?php

$endereco = 'localhost';
$banco = 'Agenda_contatos';
$usuario = 'postgres';
$senha = 'root';


$con = pg_connect("host=$endereco dbname=$banco user=$usuario password=$senha port=5432")
or die ("Sem conexão\n");

//echo "Conectado no banco de dados!";


?>
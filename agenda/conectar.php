<?php

$endereco = 'localhost';
$banco = 'agenda';
$usuario = 'postgres';
$senha = '123';



$con = pg_connect("host=$endereco dbname=$banco user=$usuario password=$senha port=5433")
or die ("Sem conexão\n");

//echo "Conectado no banco de dados!";


?>
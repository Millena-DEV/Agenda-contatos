<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de contatos</title>

    <link rel="stylesheet" href="./styles/form.css">
    <script src="./scripts/validar.js"></script>
</head>

<?php

include 'conectar.php';

?>

<table class="table">

    <h1> Cadastro de contato</h1> <hr>

    <form name="form" class="form" action="cadastro.php" method="post">

        <div class="form-areas">
          <label for="nome"> Nome: </label>
          <input type="text" name="nome" pattern="[A-Za-z].{2,}"  required />
        </div>

        <div class="form-areas">
          <label for="email"> Email: </label>
          <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            placeholder="email@gmail.com" title="Digite o email." required />
        </div>

        <div class="form-areas">
          <label for="email"> Email secundário: </label>
          <input type="email" name="email2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Digite o email." />
        </div>

        <div class="form-areas">
          <label for="telefone"> Telefone: </label>
          <input type="number" name="telefone" patern="(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})" placeholder="(xx) xxxxx-xxxx" required />
        </div>
        <!-- pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" -->
        <div class="form-areas">
          <label for="telefone"> Telefone secundário: </label>
          <input type="text" name="telefone2"/>
        </div>

        <button class="button_form" type="submit" onclick="return validar()"> Cadastrar </button></a> <br> <br>
                    
    </form>        
</table>
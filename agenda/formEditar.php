<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar contato </title>

    <link rel="stylesheet" href="./styles/form.css">
    <script src="./scripts/validar.js"></script>

</head>

<?php

    include 'conectar.php';

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST['telefone2'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];

?>

<table class="table">

<h1> Editar contato</h1> <hr>

<form name="form" class="form" action="editar.php" method="post">

    <input type="hidden" name="cod" value="<?php echo $cod; ?>">

    <div class="form-areas">
      <label for="nome"> Nome: </label>
      <input type="text" name="nome" value="<?php echo $nome?>">
    </div>

    <div class="form-areas">
      <label for="email"> Email: </label>
    <input type="email" name="email" value="<?php echo $email?>">
    </div>

    <div class="form-areas">
      <label for="email"> Email secundário: </label>
      <input type="email" name="email2" value="<?php echo $email2?>">
    </div>

    <div class="form-areas">
      <label for="telefone"> Telefone: </label>
     <input type="text" name="telefone" value="<?php echo $telefone ?>">
    </div>
    <!-- pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" -->
    <div class="form-areas">
      <label for="telefone"> Telefone: </label>
      <input type="text" name="telefone2" value="<?php echo $telefone2 ?>">
    </div>

    <button class="button_form" type="submit" onclick="return validar()"> Editar </button></a> <br> <br>
                
</form>        
</table>

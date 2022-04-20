<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de contatos </title>

    <link rel="stylesheet" href="../../../components/styles/form.css">
  
</head>

<table class="table">

    <h1> Cadastro de contato </h1> <hr>

    <form name="form" class="form" action="../../../DAO/ClienteDAO" method="post">

        <!-- tipo pessoa -->
        <div class="form-group">
        <p> Qual o tipo de cliente? </p>
          <p>          
            <input type="radio" class="input-radio" name="tipo_pessoa" value="fisica" onclick="Pessoa(this.value); ">
            <label> Pessoa Fisica </label>
            
            <input type="radio" class="input-radio" name="tipo_pessoa" value="juridica" onclick="Pessoa(this.value);">
            <label> Pessoa Juridica </label>           
          </p>
        </div>

        <div id="fisica" style="display: none;">
          <div class="form-areas">
            <label for="nome"> Nome: </label>
            <input type="text" class="form-input" id="nome" value="<?= $model->nome ?>" name="nome" pattern="[A-Za-z].{2,}" required>
          </div>
                      
          <div class="form-areas">
            <label for="cpf"> CPF: </label>
            <input type="text" maxlength="14" id="cpf" value="<?= $model->cpf ?>" name="cpf" >
            <span id="resposta"> </span><br><br>
          </div>
        </div>

        <div id="juridica" style="display: none;">                  
            <div class="form-areas">
              <label for="nomeFantasia"> Nome Fantasia: </label>
              <input type="text" class="form-input" id="nomeFantasia" value="<?= $model->nome ?>" name="nomeFantasia" pattern="[A-Za-z].{2,}" required>
            </div>

            <div class="form-areas">
              <label for="cnpj"> CNPJ: </label>
              <input type="text" class="form-input" maxlength="18" id="cnpj" value="<?= $model->cnpj ?>" name="cnpj" onblur="if(!validarCNPJ(this.value)){alert('CNPJ é inválido'); this.value='';}" required>
            </div>
        </div>

        <!-- tipo contato -->
        <div class="form-group">
          <p> Qual o tipo de contato? </p>
          <p>          
            <input type="radio" class="input-radio" name="tipo_contato" value="telefone" onclick="Contato(this.value); ">
            <label> Telefone </label>
            
            <input type="radio" class="input-radio" name="tipo_contato" value="email" onclick="Contato(this.value);">
            <label> E-mail </label>           
          </p>
        </div>

        <div id="telefone" style="display: none;">
          <div class="form-areas">
            <label for="telefone"> Telefone: </label>
            <input type="text" class="form-input" maxlength="15" value="<?= $model->nome ?>" id="OpTelefone" name="telefone" patern="(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})"
            placeholder="(xx) xxxxx-xxxx" required />
          </div>
        </div>

        <div id="email" style="display: none;">                  
            <div class="form-areas">
              <label for="email"> E-mail: </label>
              <input type="email" class="form-input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
              placeholder="email@gmail.com" title="Digite o email." required />
            </div>
        </div>

        <!-- endereco -->
        <div class="form-areas">
          <label for="logradouro"> Logradouro: </label>
          <input type="text" class="form-input" name="logradouro" pattern="[A-Za-z].{2,}"  required />
        </div>
        
        <div class="form-areas">
          <label for="cep"> CEP: </label>
          <input type="text" class="form-input" name="cep" pattern="[A-Za-z].{2,}"  required />
        </div>

        <div class="form-areas">
          <label for="numero"> Número: </label>
          <input type="text" class="form-input" name="numero" pattern="[A-Za-z].{2,}"  required />
        </div>

        <div class="form-areas">
          <label for="bairro"> Bairro: </label>
          <input type="text" class="form-input" name="bairro" pattern="[A-Za-z].{2,}"  required />
        </div>

        <div class="form-areas">
          <label for="cidade"> Cidade: </label>
          <input type="text" class="form-input" name="cidade" pattern="[A-Za-z].{2,}"  required />
        </div>

        <div class="form-areas">
          <label for="estado"> Estado: </label>
          <input type="text" class="form-input" name="estado" pattern="[A-Za-z].{2,}"  required />
        </div>
   
        

        <button class="button_form" type="submit"> Cadastrar </button> <br> 
                    
    </form>        
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../../components/scripts/validar.js"> </script>
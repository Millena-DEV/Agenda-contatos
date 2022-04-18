/*
function validar(){
    var nome = form.nome.value;
    var email = form.email.value;
    var telefone = form.telefone.value;
    
    if(nome == ""){
        alert('Preencha o campo nome.');
        form.nome.focus();
        return false;
    }
    
    if(email == "" || email.indexOf('@') == -1 ){
        alert('Preencha o campo E-mail corretamente.');
        form.email.focus();
        return false;
    }
    
    if(telefone == ""){
        alert('Preencha o campo telefone corretamente.');
        form.telefone.focus();
        return false;
    }
} */

function Pessoa(tipo) {
    if (tipo=="fisica") {
    document.getElementById("fisica").style.display = "inline";
    document.getElementById("juridica").style.display = "none";
    } else {
    document.getElementById("fisica").style.display = "none";
    document.getElementById("juridica").style.display = "inline";
    }
}

function Contato(tipo) {
    if (tipo=="telefone") {
    document.getElementById("telefone").style.display = "inline";
    document.getElementById("email").style.display = "none";
    } else if(tipo=="email") {
    document.getElementById("telefone").style.display = "none";
    document.getElementById("email").style.display = "inline";
    }
}
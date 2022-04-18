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
}
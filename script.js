
function validar() {
    var nome = form_contato.nome.value;
    var email = form_contato.email.value;

    if (nome == "") {
        alert('Preencha o campo com seu nome');
        form_contato.nome.focus();
        return false;
    } else {
        if (email == "") {
            alert('Preencha o campo com seu e-mail');
            form_contato.email.focus();
            return false;
        }
    }
}
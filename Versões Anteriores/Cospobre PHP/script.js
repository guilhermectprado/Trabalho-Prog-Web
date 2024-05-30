
function acessorios() {
    window.location.href = "acessorios.php";
}

function cadastrar() {
    window.location.href = "cadastro.php";
}

function carrinho() {
    alert("Ainda não implementado.");

}

function confirmarCadastro() {
    alert("Cadastro efetuado com sucesso!!");
    window.location.href = "conta.php";
}

function confirmarCompra() {
    alert("Compra efetuada com sucesso!!");
}

function conjuntos() {
    alert("Ainda não implementado.");
}

function conta() {
    window.location.href = "conta.php";
}

function entrar() {
    alert("Logado com sucesso!!");
    window.location.href = "index.php";
}

function esqueceusenha() {
    alert("Ainda não implementado.");
}

function home() {
    window.location.href = "index.php";
}

function perucas() {
    window.location.href = "peruca.php";
}

function sapatos() {
    alert("Ainda não implementado.");
}

function roupas() {
    alert("Ainda não implementado.");
}
function lentes() {
    alert("Ainda não implementado.");
}

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    
    if ((usuario.length >=3) && //usuario tem que ter ao menos 3 caracter
        (dominio.length >=7) && //dominio tem que ter ao menos 7 caracter (ufms.br, live.com, etc..)
        (usuario.search("@")==-1) && //não pode ter @ na parte do usuario
        (dominio.search("@")==-1) && //não pode ter @ na parte do dominio
        (usuario.search(" ")==-1) && //não pode ter espaço na parte do usuario
        (dominio.search(" ")==-1) && //não pode ter espaço na parte do dominio
        (dominio.search(".")!=-1) && //tem que ter obrigatoriamente 1 ponto na parte do dominio
        (dominio.indexOf(".") >=1)&& //tem que ter ao menos 1 ponto na parte do dominio (.com.br)
        (dominio.lastIndexOf(".") < dominio.length - 2)) //tem que ter ao menos dois caracteres apos o ultimo ponto (.br)
    {
        document.getElementById("email").className = document.getElementById("email").className.replace(" error", "");
        document.getElementById("msg").innerHTML="";
    }
    else{
        document.getElementById("msg").innerHTML="Por favor, verifique o e-mail inserido!";
        document.getElementById("email").className = document.getElementById("email").className + " error";
    }
}

function validacaoSenha(field) {
    senha = field.value.substring(0, field.value.length);
    
    if((senha.search(" ")==-1) && (senha.length >=8)){
        document.getElementById("senha").className = document.getElementById("senha").className.replace(" error", "");
        document.getElementById("msg").innerHTML="";
    }
    else {
        document.getElementById("msg").innerHTML="Por favor, verifique a senha inserida!";
        document.getElementById("senha").className = document.getElementById("senha").className + " error";
    }

}
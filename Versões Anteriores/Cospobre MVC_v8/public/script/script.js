
function conjuntos() {
    alert("Ainda não implementado.");
}


function esqueceusenha() {
    alert("Ainda não implementado.");
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

function mostrarEsconder(){
    var senha = document.getElementById("senha");
    var olho = document.getElementById("olho");

    if(senha.type == "password"){
        senha.type = "text";
        olho.src = "public/images/olho.svg";
    } 
    
    else {
        senha.type = "password";
        olho.src = "public/images/olhofechado.svg";
    }

}
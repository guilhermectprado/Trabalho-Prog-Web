

function confirmarCompraCredito() {
    alert("Compra efetuada com sucesso!!");
    window.location.href = "cartaoCredito.php";
}
function confirmarCompraDebito() {
    alert("Compra efetuada com sucesso!!");
    window.location.href = "cartaoDebito.php";
}

function conjuntos() {
    alert("Ainda não implementado.");
}

function conta() {
    window.location.href = "conta.php";
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
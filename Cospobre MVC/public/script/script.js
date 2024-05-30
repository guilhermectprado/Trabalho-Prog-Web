

function esqueceusenha() {
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

gostou = false;
ngostou = false;

function darLike(){
    var like = document.getElementById("like");

    if(gostou == false) {
        like.src = "public/images/likePreenchido.svg";
        gostou = true;
    }
    
    else {
        like.src = "public/images/likeVazio.svg";
        gostou = false;
    }

}

function darDislike(){
    var like = document.getElementById("dislike");

    if(ngostou == false) {
        like.src = "public/images/dislikePreenchido.svg";
        ngostou = true;
    }
    
    else {
        like.src = "public/images/dislikeVazio.svg";
        ngostou = false;
    }

}



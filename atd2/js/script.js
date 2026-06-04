window.onload = function(){
    alert("Bem-vindo à Semana Acadêmica 2026!");
}

function alterarTema(){
    document.body.classList.toggle("dark");
}

function mostrarOcultar(){

    let extra = document.getElementById("extra");

    if(extra.style.display === "none"){
        extra.style.display = "block";
    }
    else{
        extra.style.display = "none";
    }
}

function validarFormulario(){

    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;

    if(nome === "" || email === ""){
        alert("Preencha os campos obrigatórios!");
        return false;
    }

    return true;
}
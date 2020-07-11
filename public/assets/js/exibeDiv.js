

function mostrarDiv(valor) {
    if (valor === "Paga") {
        document.getElementById("dataPagamento").style.display = "block";
    } else{
        document.getElementById("dataPagamento").style.display = "none".removeAttribute("required");
    }                                   
}
                                                
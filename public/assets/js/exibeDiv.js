

function mostrarDiv(valor) {
    if (valor === "Pago") {
        document.getElementById("dataPagamento").style.display = "block";
    } else if (valor === "Pendente"){
        document.getElementById("dataPagamento").style.display = "none";
    }                                   
}
                                                
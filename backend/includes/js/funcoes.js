const pesoInput = document.getElementById("peso");
    const alturaInput = document.getElementById("altura");
    const indicadorIMC =     document.getElementById("indicadorIMC"); 
    function calcularIMC(peso, altura) {
    return peso / (altura * altura);
    } 
    function verificarIMC(imc) {
        if (imc < 18.5) {
            return { texto: "Abaixo do peso", cor: "abaixoPeso" };
        } else if (imc < 24.9) {
            return { texto: "Peso normal", cor: "pesoNormal" };
        } else if (imc < 29.9) {
            return { texto: "Sobrepeso", cor: "sobrepeso" };
        } else {
            return { texto: "Obeso", cor: "obeso" };
        }
    } 
    function atualizarIndicadorIMC() {
        const peso = parseFloat(pesoInput.value);
        const altura = parseFloat(alturaInput.value);
        if (isNaN(peso) || isNaN(altura) || altura === 0) {
            indicadorIMC.textContent = "";
            indicadorIMC.className = "";
            return;
        }
        const imc = calcularIMC(peso, altura);
        const resultadoIMC = verificarIMC(imc);
        indicadorIMC.textContent = resultadoIMC.texto;
        indicadorIMC.className = resultadoIMC.cor;
     } 
     pesoInput.addEventListener("input", atualizarIndicadorIMC);
     alturaInput.addEventListener("input", atualizarIndicadorIMC);

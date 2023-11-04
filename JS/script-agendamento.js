function calendario() {
    const mesAtual = window.document.getElementById('mesAtual');
    
    const dataAtual = new Date();
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    const anoHoje = dataAtual.getFullYear();
    const mesHoje = dataAtual.getMonth();
    const nomeMes = meses[mesHoje]; 
    mesAtual.textContent = `${nomeMes} ${anoHoje}`;
}

/* marcação de data do calendário */

let highlightedElement = null;

// Adicione um ouvinte de eventos para toda a tabela
document.querySelector(".table").addEventListener("click", function(event) {
  // Verifique se o elemento clicado é uma célula da tabela
  if (event.target.tagName === "TD") {
    // Remove a cor de fundo do elemento anteriormente destacado, se houver um
    if (highlightedElement) {
      highlightedElement.style.backgroundColor = "";
    }

    // Altere a cor de fundo da célula clicada
    event.target.style.backgroundColor = "lightblue";

    // Defina o elemento atualmente destacado como o elemento clicado
    highlightedElement = event.target;

    // Atualize a div de saída com o valor do elemento clicado
    document.getElementById("res").textContent = "Você marcou para o dia: " + event.target.textContent;
  }
});


/* function mostrarValor(celula) {
    
    if (celula.classList.contains('selected')) {
        celula.classList.remove('selected');
      } else {
        celula.classList.add('selected');
    }

    var valor = celula.innerHTML;
    document.getElementById('res').innerHTML = 'Você clicou em: ' + valor;

} */
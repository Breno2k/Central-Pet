function calendario() {
    const mesAtual = window.document.getElementById('mesAtual');
    
    const dataAtual = new Date();
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    const anoHoje = dataAtual.getFullYear();
    const mesHoje = dataAtual.getMonth();
    const nomeMes = meses[mesHoje]; 
    mesAtual.textContent = `${nomeMes} ${anoHoje}`;
}

/* select */

function select() {
  var select1 = document.getElementById("select1");
  var select2 = document.getElementById("select2");
  var res = document.getElementById('res');

  var selectedIndex1 = select1.selectedIndex;
  var selectedIndex2 = select2.selectedIndex;
  var selectedOptionText1 = select1.options[selectedIndex1].text;
  var selectedOptionText2 = select2.options[selectedIndex2].text;

  res.innerHTML = "Especialidade: " + selectedOptionText1 + "<br>";
  res.innerHTML += " Veterinário: " + selectedOptionText2;
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
    document.getElementById("res").innerHTML += "<br>Você marcou para o dia: " + event.target.textContent;
  }
});

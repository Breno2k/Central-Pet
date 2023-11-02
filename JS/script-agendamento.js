function calendario() {
    const mesAtual = window.document.getElementById('mesAtual');
    
    const dataAtual = new Date();
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    const anoHoje = dataAtual.getFullYear();
    const mesHoje = dataAtual.getMonth();
    const nomeMes = meses[mesHoje]; 
    mesAtual.textContent = `${nomeMes} ${anoHoje}`;
}
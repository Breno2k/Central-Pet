<?php
    if (isset($_POST['submit'])) {

        include_once('../PHP/config.php');

        $nomeAnimal = $_POST['nome-do-animal'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $pelagem = $_POST['pelagem-do-animal'];
        $dataNasc = $_POST['data-de-nascimento'];
        $sexo = $_POST['sexo'];
        $portAnimal = $_POST['porte-do-animal'];
        $naturalidade = $_POST['naturalidade'];
        $nomeRespon = $_POST['nome-do-responsavel'];
        $telefoneCelular = $_POST['telefone-celular'];

        $result = mysqli_query($conexao, "INSERT INTO `informacoes-pet` (`nome-animal`, especie, raca, pelagem, data, sexo, `porte-animal`, Naturalidade, `nome-responsavel`, telefone) VALUES ('$nomeAnimal', '$especie', '$raca', '$pelagem', '$dataNasc', '$sexo', '$portAnimal', '$naturalidade', '$nomeRespon', '$telefoneCelular')");
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro-pet.css">
    <title>Registrar Pet</title>
</head>
<body>
    <header>
        <nav>
            <a href="../HTML/index.html" class="linkHome">
                <figure>
                    <img src="../Imagens/logo-amarela.png" alt="Imagem da Logo" />
                </figure>
                <p>Central Pet</p>
            </a>
        </nav>
    </header>
    <main>
        <section class="seçaoFormulario">
            <figure class="figuraPatas">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
            </figure>
            <form action="registro-pet.php" method="POST">
                <div class="primeiraCaixaMain">
                    <figure class="figuraIcone">
                        <img src="" alt="teste">
                    </figure>
                    <div>
                        <input type="text" name="nome-do-animal" id="nome-do-animal" placeholder="Nome do animal">
                        <input type="text" name="especie" id="especie" placeholder="Espécie">
                    </div>
                </div>
                <div class="segundaCaixaMain">
                    <div class="caixaEsquerda">
                        <input type="text" name="raca" id="raça" placeholder="Raça">
                        <input type="text" name="data-de-nascimento" id="data-de-nascimento" placeholder="Data de nascimento">
                        <input type="text" name="porte-do-animal" id="porte-do-animal" placeholder="Porte do animal">
                        <input type="text" name="nome-do-responsavel" id="nome-do-responsavel" placeholder="Nome do responsável">
                    </div>
                    <div class="caixaDireita">
                        <input type="text" name="pelagem-do-animal" id="pelagem-do-animal" placeholder="Pelagem do animal">
                        <input type="text" name="sexo" id="sexo" placeholder="Sexo">
                        <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade">
                        <input type="text" name="telefone-celular" id="telefone-celular" placeholder="Telefone/celular">
                    </div>
                </div> 
                <input type="submit" name="submit" id="submit">               
            </form>

            <figure class="figuraPatas">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
                <img src="../Imagens/pata-amarela.png" alt="Imagem de uma pata amarela">
            </figure>
        </section>
    </main>
</body>
</html>

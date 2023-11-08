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
            <section class="primeiraSeçaoHeader">
                <a href="../HTML/index.html">
                    <figure>
                    <img src="../Imagens/logo-amarela.png" alt="Imagem da Logo" />
                    </figure>
                    <p>Central Pet</p>
                </a>
              </section>
              <section class="segundaSeçaoHeader">
                <ul>
                  <a href="#seçaoInformaçoes">
                    <li><button>Informações</button></li>
                  </a>
                  <a href="#seçaoSobreNos">
                    <li><button>Sobre Nós</button></li>
                  </a>
                  <a href="../HTML/create-account.html">
                    <li><button>Cadastro</button></li>
                  </a>
                  <a href="../HTML/login.html">
                    <li><button>Login</button></li>
                  </a>
                </ul>
              </section>
        </nav>
    </header>
    <main>
        <section class="seçaoFormulario">
            <div>
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
            </div>
            <form action="registro-pet.php" method="POST">
                <div class="caixasMain">
                    <div class="caixaEsquerda">
                        <div>
                            <p class="tituloCaixa">Nome do animal:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Raça:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Data de nascimento:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Porte do animal:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Nome do responsável:</p>
                            <p id="ultimaCaixa" class="caixaAmarela"></p>
                        </div>
                    </div>
                    <div class="caixaDireita">
                        <div>
                            <p class="tituloCaixa">Espécie:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Pelagem do animal:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Sexo:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Naturalidade:</p>
                            <p class="caixaAmarela"></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Telefone/Celular:</p>
                            <p id="ultimaCaixa" class="caixaAmarela"></p>
                        </div>
                    </div>
                </div>
                </form>
                <div>
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
                    </figure>
                </div>
        </section>
    </main>
    <footer>
        <p>Central Pet © 2023</p>
    </footer>
</body>
</html>

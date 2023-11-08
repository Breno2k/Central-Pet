<?php
    session_start();
    /* print_r($_SESSION); */

    include_once('config.php');
    

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($SESSION['email']);
        unset($SESSION['senha']);
        header('Location: ../html/index.html');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT `nome-usuario`, `nome-animal`, especie, raca, pelagem, data, sexo, `porte-animal`, Naturalidade FROM `informacoes-pet` WHERE email = '$logado'";
    
    
    $result = $conexao -> query($sql);
    
    
    if ($result) {
      $row = $result -> fetch_assoc();
      $nomeUsuario = $row['nome-usuario'];
      $nomeAnimal = $row['nome-animal'];
      $especie = $row['especie'];
      $raca = $row['raca'];
      $pelagem = $row['pelagem'];
      $dataNasc = $row['data'];
      $sexo = $row['sexo'];
      $portAnimal = $row['porte-animal'];
      $naturalidade = $row['Naturalidade'];
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
                  <a href="">
                    <li><button><?php echo "$nomeUsuario" ?></button></li>
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
                            <p class="caixaAmarela"><?php echo "$nomeAnimal" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Raça:</p>
                            <p class="caixaAmarela"><?php echo "$raca" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Data de nascimento:</p>
                            <p class="caixaAmarela"><?php echo "$dataNasc" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Porte do animal:</p>
                            <p class="caixaAmarela"><?php echo "$portAnimal" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Nome do responsável:</p>
                            <p id="ultimaCaixa" class="caixaAmarela"><?php echo "$nomeUsuario" ?></p>
                        </div>
                    </div>
                    <div class="caixaDireita">
                        <div>
                            <p class="tituloCaixa">Espécie:</p>
                            <p class="caixaAmarela"><?php echo "$especie" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Pelagem do animal:</p>
                            <p class="caixaAmarela"><?php echo "$pelagem" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Sexo:</p>
                            <p class="caixaAmarela"><?php echo "$sexo" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Naturalidade:</p>
                            <p class="caixaAmarela"><?php echo "$naturalidade" ?></p>
                        </div>
                        <div>
                            <p class="tituloCaixa">Telefone/Celular:</p>
                            <p id="ultimaCaixa" class="caixaAmarela"><?php echo "" ?></p>
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

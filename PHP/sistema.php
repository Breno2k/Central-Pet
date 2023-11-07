<?php
    session_start();
    /* print_r($_SESSION); */

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($SESSION['email']);
        unset($SESSION['senha']);
        header('Location: ../html/index.html');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | GN</title>
    <style>
        * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Castoro", serif;
        }

        /* nav-bar */

        html {
            scroll-behavior: smooth;
        }

        nav {
            background-color: #241337;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 16vh;
        }

        nav img {
            width: 70px;
        }

        .primeiraSeçaoHeader {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 22vw;
        }

        nav p {
            color: #ffffff;
            font-size: 2rem;
            font-family: "Patua one", serif;
        }

        nav ul {
            display: flex;
            align-items: center;
            justify-content: space-around;
            list-style: none;
            width: 48vw;
            height: 16vh;
        }

        nav ul button {
            color: #ffffff;
            background-color: transparent;
            font-size: 1.5rem;
            border: none;
        }

        nav button:hover {
            transition: 280ms;
            cursor: pointer;
            scale: 1.1;
        }

        nav button:not(:hover) {
            transition: 280ms;
        }
    </style>
</head>
<body>
<header>
    <nav>
      <section class="primeiraSeçaoHeader">
        <figure>
          <img src="../Imagens/logo-amarela.png" alt="Imagem da Logo" />
        </figure>
        <p>Central Pet</p>
      </section>
      <section class="segundaSeçaoHeader">
        <ul class="listaBotoesNav">
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

    <?php
        echo"<h1>Bem vindo $logado</h1>";
    ?>
</body>
</html>
<?php
    session_start();
    unset($SESSION['email']);
    unset($SESSION['senha']);
    header('Location: ../html/login.html');
?>
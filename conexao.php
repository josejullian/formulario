<?php
    $servidor = "localhost";
    $bdname = "cadastro";
    $usuario = "root";
    $senha = "";

    $conexao = msqli_conenect($servidor, $usuaio, $senha, $bdname);
    if(!$conexao)
        die("Problemas com a conexão com o banco de dados. Descrição do problema: " .
        mysqli_connect_error());









?>
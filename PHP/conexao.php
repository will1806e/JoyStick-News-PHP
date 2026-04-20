<?php
    // dados da conexão com o banco
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "funcionarios";

    // tenta conectar
    $c = mysqli_connect($servidor, $usuario, $senha, $banco);

    // se não conectar, já para tudo e mostra o erro
    if (!$c) {
        die("Erro de conexão: " . mysqli_connect_error());
    }
?>
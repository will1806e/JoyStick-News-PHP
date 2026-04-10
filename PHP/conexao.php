<?php
    //Inforações da conexao.
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "joystick";

    //Variável que recebe a conexão do banco.
    $c = mysqli_connect($servidor, $usuario, $senha, $banco);

    //Se a conexáo falhar irá passar o erro da conexão, e fechar ela.
    if (!$c) {
        die("Erro de conexão: " . mysqli_connect_error());
    }
?>
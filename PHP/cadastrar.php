<?php
    require "conexao.php";

    //Pegada de dados vinda do formulário de cadastro.
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nome_usuario = $_POST["nome_usuario"];
    $senha = $_POST["senha"];

    //Consulta SQL.
    $sql = "INSERT INTO usuario (nome, email, nome_usuario, senha) VALUES ($nome, $email, $nome_usuario, $senha)";

    //Faz a consulta SQL no banco.
    $resultado = mysqli_query($c, $sql);

    //Trata o resultado, trás o erro caso a query dê errado.
    if($resultado){
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($c);
    }
    
    //Fecha a conexão.
    mysqli_close($c);
?>
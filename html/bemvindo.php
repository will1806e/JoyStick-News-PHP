<?php
session_start();
// inicia a sessão

// só deixa entrar se for admin
if (!isset($_SESSION['admin'])) {
    header("Location: ../html/login.php");
    exit;
}

// pega o nome do usuário logado
$nome_usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<!-- config básica -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- título -->
<title>Bem-vindo</title>

<style>
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* BODY */
body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
}

/* CONTAINER */
.container {
    padding: 50px;
    text-align: center;
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    animation: fadeIn 0.6s ease;
}

/* ANIMAÇÃO */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* TÍTULO */
h1 {
    margin-bottom: 20px;
    color: #333;
}

/* destaque do nome */
span {
    color: #4f46e5;
    font-weight: bold;
}

/* texto */
p {
    margin-bottom: 20px;
}

/* BOTÕES BASE */
.btn,
.logout,
.add {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    color: white;
}

/* variações */
.btn {
    background: linear-gradient(135deg, #4f46e5, #9333ea);
}

.add {
    background: #22c55e;
}

.logout {
    background: #ef4444;
}

/* hover geral */
.btn:hover,
.add:hover,
.logout:hover {
    opacity: 0.9;
}
</style>

</head>

<body>

<!-- caixa principal -->
<div class="container">

    <!-- mensagem de boas-vindas -->
    <h1>Bem-vindo ao site, <span><?php echo $nome_usuario; ?></span> 👋</h1>

    <!-- texto -->
    <p>Seu login foi realizado com sucesso!</p>

    <!-- ir para listagem de usuários -->
    <a class="btn" href="../PHP/listar.php">Ir para usuários</a>
    <br>

    <!-- cadastrar novo funcionário -->
    <a class="add" href="../html/cadastro.php">Cadastrar funcionário</a>
    <br>

    <!-- sair do sistema -->
    <a class="logout" href="../html/login.php">Sair</a>

</div>

</body>
</html>
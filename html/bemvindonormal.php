<?php
session_start();
// inicia a sessão

// proteção: se não estiver logado, volta pro login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/login.php");
    exit;
}

// pega o nome do usuário logado
$nome_usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
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

/* botão padrão (caso use depois) */
.btn {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    color: white;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
}

/* botão logout */
.logout {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    color: white;
    background: #ef4444;
}

.logout:hover {
    opacity: 0.9;
}
</style>

</head>

<body>

<!-- caixa central -->
<div class="container">

    <!-- mensagem de boas-vindas com nome do usuário -->
    <h1>Bem-vindo, <span><?php echo $nome_usuario; ?></span> 👋</h1>

    <!-- texto simples -->
    <p>Seu login foi realizado com sucesso!</p>

    <!-- botão de sair -->
    <a class="logout" href="../PHP/logout.php">Sair</a>

</div>

</body>
</html>
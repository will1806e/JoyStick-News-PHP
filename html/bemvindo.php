<?php
session_start();

// Proteção: só entra se estiver logado
if (!isset($_SESSION['admin'])) {
    header("Location: ../html/login.php");
    exit;
}

$nome_usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bem-vindo</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    height: 100vh;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    background: white;
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    animation: fadeIn 0.6s ease;
}

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

h1 {
    color: #333;
    margin-bottom: 20px;
}

span {
    color: #4f46e5;
    font-weight: bold;
}

p {
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    color: white;
    text-decoration: none;
}

.logout {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    background: #ef4444;
    color: white;
    text-decoration: none;
}

.add {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    background: #22c55e;
    color: white;
    text-decoration: none;
}

.logout:hover,
.btn:hover,
.add:hover {
    opacity: 0.9;
}

</style>

</head>
<body>

<div class="container">
    <h1>Bem-vindo ao site, <span><?php echo $nome_usuario; ?></span> 👋</h1>

    <p>Seu login foi realizado com sucesso!</p>

    <a class="btn" href="../PHP/listar.php">Ir para usuários</a>
    <br>
    <a class="add" href="../html/cadastro.php">Cadastrar funcionário</a>
    <br>
    <a class="logout" href="../html/login.php">Sair</a>
</div>

</body>
</html>
<?php
session_start();

// Proteção
if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sucesso</title>

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
}

h1 {
    color: #22c55e;
    margin-bottom: 20px;
}

p {
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 10px;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    color: white;
    text-decoration: none;
}

.btn:hover {
    opacity: 0.9;
}

</style>

</head>
<body>

<div class="container">
    <h1>Usuário excluído com sucesso! ✅</h1>
    <p>A operação foi realizada corretamente.</p>

    <a class="btn" href="listar.php">Voltar</a>
</div>

</body>
</html>

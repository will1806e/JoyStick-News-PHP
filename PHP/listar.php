<?php
session_start();
require "conexao.php";

// Proteção de login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/login.php");
    exit;
}

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($c, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de Usuários</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    min-height: 100vh;
    padding: 30px;
}

.container {
    max-width: 1000px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.logout {
    text-decoration: none;
    background: #ef4444;
    color: white;
    padding: 8px 15px;
    border-radius: 8px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
}

.table th {
    background: #4f46e5;
    color: white;
}

.table tr:nth-child(even) {
    background: #f3f4f6;
}

.btn-delete {
    background: #ef4444;
    color: white;
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
}

.btn-delete:hover {
    opacity: 0.8;
}
</style>

</head>
<body>

<div class="container">

    <div class="top-bar">
        <h2>Usuários Cadastrados</h2>
        <a class="logout" href="../html/bemvindo.php">Voltar</a>
    </div>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Usuário</th>
            <th>Ocupação</th>
            <th>Ações</th>
        </tr>

        <?php while ($usuarios = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $usuarios['id']; ?></td>
            <td><?php echo $usuarios['nome']; ?></td>
            <td><?php echo $usuarios['email']; ?></td>
            <td><?php echo $usuarios['nome_usuario']; ?></td>
            <td><?php echo $usuarios['ocupacao']; ?></td>
            <td>
                <?php if (isset($_SESSION['admin'])) { ?>
                    <a class="btn-delete" href="excluir.php?id=<?php echo $usuarios['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                <?php } else { echo '-'; } ?>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>
<?php
session_start();
// inicia a sessão

require("../PHP/conexao.php");
// conexão com o banco

// só deixa entrar se for admin
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- config básica -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- título da aba -->
  <title>Cadastro de Usuários</title>

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
      width: 100%;
      max-width: 400px;
      padding: 40px;
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
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* INPUTS */
    .input-group {
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
    }

    .input-group input,
    .input-group select {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus,
    .input-group select:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 5px rgba(79,70,229,0.4);
    }

    /* BOTÃO */
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      color: white;
      cursor: pointer;
      background: linear-gradient(135deg, #4f46e5, #9333ea);
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.9;
    }

    /* FOOTER */
    .footer {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
    }

    .footer a {
      color: #4f46e5;
      text-decoration: none;
      font-weight: bold;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <!-- caixa central -->
  <div class="container">

    <!-- título -->
    <h2>Criar Conta</h2>

    <!-- formulário de cadastro -->
    <form action="../PHP/cadastrar.php" method="POST">

      <!-- nome completo -->
      <div class="input-group">
        <label>Nome Completo</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
      </div>

      <!-- email -->
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Digite seu email" required>
      </div>

      <!-- usuário -->
      <div class="input-group">
        <label>Nome de Usuário</label>
        <input type="text" name="nome_usuario" placeholder="Escolha um nome de usuário" required>
      </div>

      <!-- senha -->
      <div class="input-group">
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
      </div>

      <!-- ocupação -->
      <div class="input-group">
        <label>Ocupação</label>
        <select name="ocupacao" required>
          <option value="">Selecione a ocupação</option>
          <option value="Gerente">Gerente</option>
          <option value="Vendedor">Vendedor</option>
          <option value="Suporte">Suporte</option>
          <option value="Financeiro">Financeiro</option>
          <option value="TI">TI</option>
        </select>
      </div>

      <!-- botão -->
      <button class="btn" type="submit">Cadastrar</button>
    </form>

    <!-- voltar -->
    <div class="footer">
      <a href="login.php">Voltar</a>
    </div>

  </div>

</body>
</html>
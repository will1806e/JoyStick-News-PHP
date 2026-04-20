<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- configuração básica -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- título da aba -->
  <title>Entrar</title>

  <style>
    /* RESET + PADRÃO */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* BODY (centraliza e aplica fundo) */
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #4f46e5, #9333ea);
    }

    /* CONTAINER PRINCIPAL */
    .container {
      width: 100%;
      max-width: 400px;
      padding: 40px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
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

    .input-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 10px;
      outline: none;
    }

    .input-group input:focus {
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
    }

    /* FOOTER (caso use depois) */
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
  </style>
</head>

<body>

  <!-- caixa central do login -->
  <div class="container">

    <!-- título da página -->
    <h2>Entrar</h2>

    <!-- formulário de login -->
    <form action="../PHP/login.php" method="POST">

      <!-- campo usuário -->
      <div class="input-group">
        <label>Nome de Usuário</label>
        <input type="text" name="nome_usuario" required>
      </div>

      <!-- campo senha -->
      <div class="input-group">
        <label>Senha</label>
        <input type="password" name="senha" required>
      </div>

      <!-- botão de envio -->
      <button class="btn" type="submit">Entrar</button>

    </form>

  </div>

</body>
</html>
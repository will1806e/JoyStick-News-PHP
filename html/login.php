<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <style>
    * {margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
    body {height:100vh;background:linear-gradient(135deg,#4f46e5,#9333ea);display:flex;align-items:center;justify-content:center;}
    .container {background:white;padding:40px;border-radius:20px;width:100%;max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.2);}
    .container h2 {text-align:center;margin-bottom:20px;color:#333;}
    .input-group {margin-bottom:15px;}
    .input-group label {display:block;margin-bottom:5px;color:#555;font-size:14px;}
    .input-group input {width:100%;padding:12px;border-radius:10px;border:1px solid #ccc;outline:none;}
    .input-group input:focus {border-color:#4f46e5;box-shadow:0 0 5px rgba(79,70,229,0.4);}
    .btn {width:100%;padding:12px;border:none;border-radius:10px;background:linear-gradient(135deg,#4f46e5,#9333ea);color:white;font-size:16px;cursor:pointer;}
    .footer {text-align:center;margin-top:15px;font-size:14px;}
    .footer a {color:#4f46e5;text-decoration:none;font-weight:bold;}
  </style>
</head>
<body>
  <div class="container">
    <h2>Entrar</h2>

    <form action="../PHP/login.php" method="POST">
      <div class="input-group">
        <label>Nome de Usuário</label>
        <input type="text" name="nome_usuario" required>
      </div>

      <div class="input-group">
        <label>Senha</label>
        <input type="password" name="senha" required>
      </div>

      <button class="btn" type="submit">Entrar</button>
    </form>


  </div>
</body>
</html>

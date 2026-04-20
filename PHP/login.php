<?php
session_start();
// inicia a sessão pra guardar quem tá logado

require("conexao.php");
// conexão com o banco

$usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];
// pega o que veio do formulário

// login direto de admin (fixo no código)
if ($usuario == "admin" && $senha == "123") {

    $_SESSION['admin'] = true;
    $_SESSION['usuario'] = "admin";
    // marca como admin na sessão

    header("Location: ../html/bemvindo.php");
    exit;
    // manda pra página do admin
}

// consulta no banco pra ver se existe esse usuário
$sql = "SELECT * FROM usuario WHERE nome_usuario = '$usuario' and senha = '$senha'";

$resultado = mysqli_query($c, $sql);
// executa a query

if (mysqli_num_rows($resultado) > 0) {
    // se achou usuário

    $dados = mysqli_fetch_assoc($resultado);
    // pega os dados dele

    $_SESSION['id'] = $dados['id'];
    $_SESSION['usuario'] = $dados['nome_usuario'];
    // salva na sessão

    header("Location: ../html/bemvindonormal.php");
    exit;
    // manda pra tela de usuário comum
}
?>
<?php
var_dump($_POST);
session_start();
require("conexao.php");

$usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha == "123") {

$_SESSION['admin'] = true;
$_SESSION['usuario'] = "admin";

header("Location: ../html/bemvindo.php");
exit;
}






$sql = "SELECT * FROM usuario WHERE nome_usuario = '$usuario' and senha = '$senha'";
$resultado = mysqli_query($c, $sql);

if (mysqli_num_rows($resultado) > 0) {

    $dados = mysqli_fetch_assoc($resultado);

    $_SESSION['id'] = $dados['id'];
    $_SESSION['usuario'] = $dados['nome_usuario'];

    header("Location: ../html/bemvindonormal.php");
    exit;
}
    


?>
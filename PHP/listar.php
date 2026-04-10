<?php
require "conexao.php";

//Query para pegar os dados da tabela.
$sql = "SELECT * FROM usuario";

//Execução da query.
$resultado = mysqli_query($c, $sql);

//While para mostrar linha por linha da tabela trazida pela query.
while ($usuarios = mysqli_fetch_assoc($resultado)) {
    echo "ID = ". $usuarios["id"] . "<br>";
    echo "NOME = ". $usuarios["nome"] . "<br>";
    echo "E-mail = ". $usuarios["email"] . "<br>";
    echo "NOME DE USUÁRIO = ". $usuarios["nome_usuario"] . "<br>";
    echo "SENHA = ". $usuarios["senha"] . "<br>";
}





?>
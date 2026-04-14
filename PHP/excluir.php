<?php
require("conexao.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM usuario WHERE id = $id";

    if (mysqli_query($c, $sql)) {
        header("Location: excluido.php");
        exit;
    } else {
        echo "Erro ao excluir: " . mysqli_error($c);
    }
} else {
    echo "ID não informado.";
}
?>
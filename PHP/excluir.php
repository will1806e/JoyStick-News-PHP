<?php
require("conexao.php");
// puxa a conexão com o banco

if (isset($_GET['id'])) {
    // vê se veio o id pela URL

    $id = intval($_GET['id']);
    // transforma o id em número

    $sql = "DELETE FROM usuario WHERE id = $id";
    // monta o comando pra deletar o usuário com esse id

    if (mysqli_query($c, $sql)) {
        // executa a query, se der certo:

        header("Location: excluido.php");
        exit;
        // manda pra página de confirmação e encerra
    } else {
        // se der erro, mostra qual foi
        echo "Erro ao excluir: " . mysqli_error($c);
    }

} else {
    // se nem veio id na URL
    echo "ID não informado.";
}
?>
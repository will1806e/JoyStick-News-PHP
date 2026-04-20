<?php
session_start();
// inicia a sessão (precisa disso pra conseguir destruir depois)

session_destroy();
// apaga tudo da sessão (logout total)

header("Location: ../html/login.php");
exit;
// manda de volta pro login
?>
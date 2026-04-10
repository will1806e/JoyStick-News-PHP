<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="../img/joytstick_icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Cabeçalho-->
    <header>
        <section>
            <div id="menu"><button class="btn-menu"><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div> 

            <div class="logo"><a href="../html/admin.php"><img class="logo-img" src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-header"></a></div>

            <div class="pesquisa-icone">
        </section>
        <hr>
        <div class="overlay" hidden></div>
    </header>

    <!--Menu Lateral-->
    <aside id="aside" class="aside" hidden>
        <section>
            <div class="menu-logo">
                <div id="menu-aside" class="menu-aside"><button><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div>
                <div class="logo-aside"><a href="../html/pagina-principal.php"><img src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-header"></a></div>
            </div>
            <div class="redes-aside">
                <h3>Redes Sociais</h3>
                <nav>
                    <ul class="ul-aside">
                    <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                    <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
                    <li><a href="https://www.tiktok.com" target="_blank">TikTok</a></li>
                    <li><a href="https://discord.com" target="_blank">Discord</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </aside>

    <!--Conteúdo Principal-->
    <main>

    </main>

    <!--Rodapé-->
    <footer>
        <hr>
        <br>
        <section>
            <div class="logo-rodape">
                <img class="logo-img" src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-footer">
                <p>Seu portal de notícias sobre games, reviews e novidades do mundo gamer.</p>
            </div>
            <div class="footer-redes">
                <h3>Redes Sociais</h3>
                <nav>  
                    <li class="redes-nav"><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                    <li class="redes-nav"><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
                    <li class="redes-nav"><a href="https://www.tiktok.com" target="_blank">TikTok</a></li>
                    <li class="redes-nav"><a href="https://discord.com" target="_blank">Discord</a></li>
                </nav>
            </div>
            <div class="footer-contato">
                <h3>Entre em contato</h3>
                <form class="form-rodape" action="" method="post">
                    <label for="nome-contato">Nome:</label>
                    <input type="text" id="nome-contato" placeholder="Digite seu nome...">
                    <label for="input-contato">E-mail:</label>
                    <input class="email-footer" type="email" placeholder="Digite seu E-mail..." id="input-contato">
                    <label for="textarea-mensagem">Mensagem:</label>
                    <textarea id="textarea-mensagem" rows="1"></textarea>
                    <input type="button" value="Enviar">
                </form>
            </div>
        </section>
        <p class="direitos-reservador"> &copy; JoyStick News - 2025 Todos os direitos reservados.</p>
        <hr>
        <br>
    </footer>
    <script src="../JavaScript/script.js"></script>
</body>
</html>
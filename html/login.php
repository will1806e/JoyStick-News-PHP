<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - JoyStick News</title>
    <link rel="shortcut icon" href="../img/joytstick_icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Cabeçalho-->
    <header>
        <section>
            <div id="menu"><button class="btn-menu"><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div> 

            <div class="logo"><a href="../html/pagina-principal.html"><img class="logo-img" src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-header"></a></div>

            <div class="pesquisa-icone">
                <div class="input-pesquisar">
                    <form class="pesquisar" action="" method="post">
                        <img class="lupa"  src="../img/icons/procurar.png" alt="Lupa para pesquisa">
                        <input type="search" id="pesquisa" placeholder="Buscar Notícias...">
                    </form>
                </div>

                <div class="icone-info"><a  class="icon-usuario" href="../html/login.html"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="Icone de login" height="50"></a></div>
            </div>
        </section>
        <hr>
        <div class="overlay" hidden></div>
    </header>
<!--Menu Lateral-->
    <aside id="aside" class="aside" hidden>
        <section>
            <div class="menu-logo">
                <div id="menu-aside" class="menu-aside"><button><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div>
                <div class="logo-aside"><a href="../html/pagina-principal.html"><img src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-header"></a></div>
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
            <div class="usuario-aside">
                <h3>Perfil do Usuário</h3>
                <nav>
                    <ul class="ul-aside">
                        <li><a href="../html/cadastro.html">Cadastrar-se</a></li>
                        <li><a href="../html/login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </aside>
 <!--Conteúdo Principal-->
    <main>
        <section>
            <h1>Faça seu login:</h1>
            <br>
            <form class="login-forms" action="" method="post">

                <div class="login-aling">
                    <div class="login-inputs"><label for="input-usuario">Nome de usuário:</label>
                    <input class="input" type="text" placeholder="Digite seu nome de usuário..." id="input-usuario"></div>

                    <div class="login-inputs"><label for="input-senha">Senha:</label>
                    <input class="input" type="password" placeholder="Digite sua senha..." id="input-senha"></div>
                </div>

                <div class="botoes-login"><input type="button" value="Entrar">
                <input type="reset" value="Limpar dados"></div>
            </form>
            <br>
            <p>Não tem uma conta? <a href="../html/cadastro.html">Faça o cadastro.</a></p>
        </section>
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
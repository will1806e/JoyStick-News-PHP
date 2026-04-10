<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoyStick News</title>
    <link rel="shortcut icon" href="../img/joytstick_icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/pagina-principal.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
<!--Cabeçalho-->
    <header>
        <section>
            <div id="menu"><button class="btn-menu"><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div> 

            <div class="logo"><a href="../html/pagina-principal.php"><img class="logo-img" src="../img/icons/logotipo_sem_fundo.png" alt="Icone do Site" id="icone-header"></a></div>

            <div class="pesquisa-icone">
                <div class="input-pesquisar">
                    <form class="pesquisar" action="" method="post">
                        <img class="lupa"  src="../img/icons/procurar.png" alt="Lupa para pesquisa">
                        <input type="search" id="pesquisa" placeholder="Buscar Notícias...">
                    </form>
                </div>

                <div class="icone-info"><a  class="icon-usuario" href="../html/login.php"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="Icone de login" height="50"></a></div>
            </div>
        </section>
        <hr>
        <div class="overlay" hidden></div>
    </header>
<!--Menu Lateral-->
    <aside id="aside" class="aside" hidden>
        <section>
            <div class="menu-logo">
                <div id="menu-aside"><button class="btn-menu"><img class="menu-img" src="../img/icons/menu.png" alt="Menu" height="20"></button></div>
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
            <div class="usuario-aside">
                <h3>Perfil do Usuário</h3>
                <nav>
                    <ul class="ul-aside">
                        <li><a href="../html/cadastro.php">Cadastrar-se</a></li>
                        <li><a href="../html/login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </aside>

<!--Conteúdo Principal-->
    <main>
        <section>
            <!--Artigo Principal-->
            <article class="stand-principal">
                <div>
                    <div class="artigos">
                        <a href="../html/artigo.php"><img class="img-artigo-principal" src="../img/img-artigos/width_550.png" alt="Imagem do artigo"></a>
                        <p class="categorias-principal">PC</p>
                        <hr>
                    </div>
                </div>
                <div class="artigo-desc">
                    <a class="overlay-artigo" href="../html/artigo.php"></a>
                    <div class="descricao-artigo">
                        <h1>Cyberpunk 2077: Phantom Liberty - A Expansão que Redefiniu o Jogo</h1>
                        <p class="descricao">Após anos de atualizações e melhorias, Cyberpunk 2077 finalmente entrega a experiência que os fãs esperavam. A nova expansão Phantom Liberty não apenas adiciona conteúdo, mas redefine completamente a experiência de jogo.</p>
                    </div>
                    <div class="items-artigos">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario">
                        <p>Victor Matheus</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>20 min</p></div>
                        <p>2 horas atrás</p>
                    </div>
                </div>
            </article>

            <!--Botões de categoria-->
            <div>
                <nav>
                    <form class="btn-categorias" action="" method="post">
                        <input id="todos" type="button" value="Todos">
                        <input id="mobile" type="button" value="Mobile">
                        <input id="pc" type="button" value="PC">
                        <input id="console" type="button" value="Console">
                        <input id="e-sports" type="button" value="E-Sports">
                        <input id="nintendo" type="button" value="Nintendo">
                    </form>
                </nav>
            </div>
            <br>

            <!--Stands de artigos-->
            <div class="container-artigos">
                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/mobile.png" alt="Imagem do artigo"></a>
                        <p class="categorias">Mobile</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Como o Celular Virou o Console do Bolso</h2>
                        <p class="descricao"    >Uma análise de como os smartphones transformaram a indústria dos games, explorando os títulos mais populares e o impacto dos jogos mobile no mercado global.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Odali Cassimiro</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/nintendo-zenda.png" alt="Imagem do artigo"></a>
                        <p class="categorias">Nintendo</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>The Legend of Zelda: Como a Franquia Continua Definindo Gerações de Jogadores</h2>
                        <p class="descricao">Um mergulho na história e evolução da saga The Legend of Zelda, destacando seu impacto cultural, inovações de jogabilidade e o legado deixado por títulos icônicos como Breath of the Wild e Tears of the Kingdom.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Victor Matheus</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/champions.png" alt="Imagem do artigo"></a>
                        <p class="categorias">E-Sports</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Valorant Champions: A Jornada até o Palco Mundial</h2>
                        <p class="descricao">Destaques do maior torneio de Valorant, trazendo os momentos mais marcantes, jogadores que brilharam e o impacto competitivo no cenário dos eSports.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Pedro Kalyd</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/header_alt_assets_0_brazilian.jpg" alt="Imagem do artigo"></a>
                        <p class="categorias">PC</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Europa Universalis V conquista fãs de estratégia com seu lançamento em novembro de 2025</h2>
                        <p class="descricao">Aclamado como um dos grandes lançamentos de 2025 para PC, Europa Universalis V chega com sistema de diplomacia remodelado, fronteiras dinâmicas e melhorias no combate e na economia — ideal para quem curte jogos de grande escala e estratégia histórica.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Emilly Guimarães</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/major_budapeste_starladder.png" alt="Imagem do artigo"></a>
                        <p class="categorias">E-Sports</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>CS2: mudanças no formato dos Majors e final em BO5</h2>
                        <p class="descricao">Valve e organizadores anunciaram alterações importantes nos Majors de Counter-Strike 2 em 2025 — expansão de times/etapas e final em melhor-de-cinco — para reduzir aleatoriedade e ampliar o espetáculo competitivo.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>João Pedro</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/ERN-header-mobile.png" alt="Imagem do artigo"></a>
                        <p class="categorias">PC</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Elden Ring Nightreign — DLC “The Forsaken Hollows” chega em dezembro</h2>
                        <p class="descricao">FromSoftware/Bandai Namco anunciaram o DLC Nightreign: The Forsaken Hollows, com novas áreas, dois novos personagens/classes (Scholar, Undertaker) e conteúdo extra, com lançamento marcado para 4 de dezembro de 2025.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Rafael Santos</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/BO7-SEASON-01-ANNOUNCEMENT-TOUT.jpg" alt="Imagem do artigo"></a>
                        <p class="categorias">Console</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Black Ops 7 — Season 01 traz mapas e integração com Warzone</h2>
                        <p class="descricao">O lançamento de Call of Duty: Black Ops 7 trouxe uma Season 01 robusta (novos mapas, modos sazonais e integração com Warzone), além de atualizações de balanceamento e conteúdo de Zombies. Útil para cobertura sobre lançamentos e atualizações de consoles.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Gabriel Souza</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/show.png" alt="Imagem do artigo"></a>
                        <p class="categorias">Mobile</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Genshin Impact — ciclo de banners e atualizações de fim de ano</h2>
                        <p class="descricao">Genshin Impact segue com o ciclo de versões (6.x em 2025) e banners de personagens; cobertura atual foca nas mudanças de banners, eventos sazonais e como isso afeta retenção e microtransações. Ótimo assunto pra público mobile.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Adriele Cruz</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/16x9_Movie_TheSupermarioGalaxyMovie_HeroCar_GB_eng_image600w.jpg" alt="Imagem do artigo"></a>
                        <p class="categorias">Nintendo</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#"><h2>Nintendo Direct: trailer de “The Super Mario Galaxy” — filme e novidades</h2>
                        <p class="descricao">A Nintendo apresentou um Direct com o trailer do filme Super Mario Galaxy (estreia prevista abril/2026) e outros anúncios relacionados a IPs clássicas — bom gancho para público Nintendo e cultura pop.</p></a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                        <p>Carlos Henrique</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                        <p>15 min</p></div>
                        <p>1 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/eternal.jpg" alt="Imagem do artigo"></a>
                        <p class="categorias">Mobile</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#">
                            <h2>“Eternal Odyssey” recebe update massivo com novos personagens</h2>
                            <p class="descricao">O RPG mobile Eternal Odyssey ganhou uma expansão com heróis inéditos, novas dungeons e melhorias no sistema de guildas.</p>
                        </a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                            <p>Marcos Lira</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                            <p>8 min</p></div>
                        <p>2 horas atrás</p>
                    </div>
                </article>

                <article class="stands-artigo">
                    <div class="artigos">
                        <a href="#"><img class="img-artigos" src="../img/img-artigos/rtx5090.jpg" alt="Imagem do artigo"></a>
                        <p class="categorias">PC</p>
                    </div>
                    <div class="descricao-artigo-geral">
                        <a href="#">
                            <h2>RTX 5090 promete revolucionar gráficos com DLSS 4</h2>
                            <p class="descricao">A Nvidia revelou detalhes da RTX 5090, com foco em ray tracing avançado e a nova geração de upscaling inteligente DLSS 4.</p>
                        </a>
                    </div>
                    <div class="items-artigos-gerais">
                        <div class="info-artigo"><img class="user-icon" src="../img/icons/usuario-icon.png" alt="icone do usuario" height="50">
                            <p>Juliana Moraes</p></div>
                        <div class="info-artigo"><img src="../img/icons/relogio.png" alt="icone de relogio" height="20">
                            <p>12 min</p></div>
                        <p>30 minutos atrás</p>
                    </div>
                </article>
            </div>
        </section>
        <div>
            <form action="" method="post">
                <input id="carregar-mais" type="button" value="Mostrar mais">
            </form>
        </div>
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
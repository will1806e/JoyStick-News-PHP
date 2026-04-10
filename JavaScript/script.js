
//Funções do menu lateral
let menu = document.getElementById("menu");
let menuaside = document.getElementById("menu-aside");
let overlay = document.querySelector(".overlay");

menu.addEventListener("click", abrirFecharMenu);
menuaside.addEventListener("click", abrirFecharMenu);
overlay.addEventListener("click", abrirFecharMenu);

function abrirFecharMenu(){
    let aside = document.getElementById("aside");
    let atr = aside.getAttribute("hidden");
    if(atr != null){
        aside.removeAttribute("hidden");
        overlay.removeAttribute("hidden");
        document.body.classList.add("no-scroll");
    }else{
        aside.setAttribute("hidden", "hidden");
        overlay.setAttribute("hidden", "hidden");
        document.body.classList.remove("no-scroll")
    };
};

//Funções dos botões de filtro
let botao_todos = document.querySelector("#todos");
let botao_mobile = document.querySelector("#mobile");
let botao_pc = document.querySelector("#pc");
let botao_console = document.querySelector("#console");
let botao_esports = document.querySelector("#e-sports");
let botao_nintendo = document.querySelector("#nintendo");
let tipo_botao = document.querySelector(".categorias");

botao_todos.addEventListener("click", filtro_todos);
botao_mobile.addEventListener("click", filtro_mobile);
botao_pc.addEventListener("click", filtro_pc);
botao_console.addEventListener("click", filtro_console);
botao_esports.addEventListener("click", filtro_esports);
botao_nintendo.addEventListener("click", filtro_nintendo);


function filtro_todos(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        let stands = document.querySelectorAll(".stands-artigo");
        if(i >= 6){
            stands[i].style.display = "none"
        } else{
            stands[i].style.display = "flex"
        }
        let botao = document.getElementById("carregar-mais");
        botao.removeAttribute("style")
    }
}

function filtro_mobile(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        tipo_cat = categoria[i].textContent;
        stands = document.querySelectorAll(".stands-artigo");
        let botao = document.getElementById("carregar-mais");
        botao.style.display = "none"
        if(tipo_cat == "Mobile"){
            stands[i].removeAttribute("style");
        } else{
            stands[i].style.display = "none"
        }
    }
}

function filtro_pc(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        tipo_cat = categoria[i].textContent;
        stands = document.querySelectorAll(".stands-artigo");
        let botao = document.getElementById("carregar-mais");
        botao.style.display = "none"
        if(tipo_cat == "PC"){
            stands[i].removeAttribute("style");
        } else{ 
            stands[i].style.display = "none"
        }
    }
}

function filtro_console(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        tipo_cat = categoria[i].textContent;
        stands = document.querySelectorAll(".stands-artigo");
        let botao = document.getElementById("carregar-mais");
        botao.style.display = "none"
        if(tipo_cat == "Console"){
            stands[i].removeAttribute("style");
        } else{
            stands[i].style.display = "none"
        }
    }
}

function filtro_esports(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        tipo_cat = categoria[i].textContent;
        stands = document.querySelectorAll(".stands-artigo");
        let botao = document.getElementById("carregar-mais");
        botao.style.display = "none"
        if(tipo_cat == "E-Sports"){
            stands[i].removeAttribute("style");
        } else{
            stands[i].style.display = "none"
        }
    }
}

function filtro_nintendo(){
    let categoria = document.querySelectorAll(".categorias");
    for(let i = 0; i < categoria.length; i++) {
        tipo_cat = categoria[i].textContent;
        stands = document.querySelectorAll(".stands-artigo");
        let botao = document.getElementById("carregar-mais");
        botao.style.display = "none"
        if(tipo_cat == "Nintendo"){
            stands[i].removeAttribute("style");
        } else{
            stands[i].style.display = "none"
        }
    }
}

//botão mostrar mais
let artigos = document.querySelectorAll(".stands-artigo");
let botao = document.getElementById("carregar-mais");

let quantidadeInicial = 6;
let quantidadePorClique = 3;

artigos.forEach((artigo, index) => {
    if(index >= quantidadeInicial) {
        artigo.style.display = "none";
    }
});

botao.addEventListener("click", mostrarMais);
    
function mostrarMais(){
    for(let i = quantidadeInicial; i < quantidadeInicial + quantidadePorClique; i++) {
        if (artigos[i]) {
            artigos[i].style.display = "flex";
        }
    }
    quantidadeInicial += quantidadePorClique;

    if (quantidadeInicial >= artigos.length) {
        botao.style.display = "none";
    }
};

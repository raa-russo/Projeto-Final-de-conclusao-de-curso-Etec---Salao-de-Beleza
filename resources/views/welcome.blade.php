<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>RAYCUTS</title>
</head>
<body>

<div class="container-menu">
    <div class="menu">
        <div id="logo"><a href="welcome"><img src="imagens/Logo.png" width="200px" ></a></div>
        <div class="container-link">
            <div id="borda"><a href="" class="link-menu">Inicio</a></div>
            <div id="borda"><a href="#conteudo-5" class="link-menu">Sobre nós</a></div>
            <div id="borda"><a href="contato" class="link-menu">Contato</a></div>
            <div id="borda"><a href="login" class="link-menu">Entrar</a></div>
        </div>
    </div>
 
<!--Fim do menu-->

<div class="conteudo-1">
    <div id="imagem-1">
        <p id="paragrafo-1">FACILITE OS AGENDAMENTOS E MELHORE O DESEMPENHO
        </p>
        <br>
        <p id="paragrafo-2">Funcionalidades incriveis para você ou sua empresa.<br> Encontre seu profissional
            ou traga sua empresa e alcance o sucesso.</p>
        
        <a href="#conteudo-5"  id="saiba-mais" onmouseenter="foco()" onmouseout="saiu()">Saiba mais</a>

    
    </div>

    <div id="imagem-2"> 
        <a href=""><img src="imagens/Vector.png" width="45px">Instagram</a> 
         <a href=""><img src="imagens/facebook-svgrepo-com (1) 1.png" width="45px" >Facebook</a> 
         <a href="boot"><img src="imagens/chatboot.png" width="45px" >ChatBoot</a> 

    </div> 
    
</div>
</div>
<div class="container-conteudo-2">
    <div class="parte-1">
        <p id="paragrafo-3">
            Tudo o que você <br>precisa em um só <br>lugar
        </p>
        <br>
        <p id="paragrafo-3">De forma <br>simples e <br>rápida</p>
        <br>
        <a href="cadastro" class="link">QUERO ME TORNAR UM <span id="cor">RAYCUTS</span></a>
        <br>
        <a href="pesquisa-profissional"  class="link">ENCONTRAR UM PROFISSIONAL</a>
    </div>
    
</div>

<div class="container-conteudo-3">
    <div class="cliente">
    <h2 class="titulo">Para Cliente</h2>
    <br>
    <p id="paragrafo-conteudo-3">Na Raycuts você cliente tem a facilidade de encontrar profissionais da beleza
         e serviço escolhido, pelo seu celular, notebook ou PC, tudo de forma simples, rápida e melhor: gratuita.
        <br> faça já o seu cadastro e se torne um cliente <span id="cor">Raycuts</span>.
    </p>
    <a href="cliente" class="link-cliente">QUERO ME TORNAR UM CLIENTE <span id="cor">RAYCUTS</span></a>
    
    </div>
</div>
    <div class="container-conteudo-4">
    <div class="empresa">
<h2 class="titulo">Para Profissional</h2>
<BR>
        <p id="paragrafo-4">Na Raycuts você profissional divulga seu trabalho, organiza o
            agendamento e melhora o desempenho de seu negócio, tudo pelo celular, notebook ou PC,
             nós da Raycuts indicamos profissionais e empresas de acordo com sua localização,
              tudo de forma simples, rápida e o melhor: gratuita.
           <br> Faça já o seu cadastro e se torne um <span id="cor">Raycuts</span>.
        </p>
        <a href="profissional" id="link-empresa">QUERO ME TORNAR UM <span id="cor">RAYCUTS</span></a>
<br>




    </div>
    </div>

<div id="conteudo-5" class="container-conteudo-5">

    <div class="sobre">

        <h1 id="raycuts">Raycuts</h1>

        <br>

<p id="paragrafo-5"><span id="cor">Raycuts</span> surgiu como um simples projeto para o TCC, seu objetivo é ajudar e facilitar 
    a vida daquelas pessoas que tem pouco tempo livre no seu dia a dia, mas que se
importam com a beleza e o bem-estar. 
      Na Raycuts você pode agendar um horário em um barbeiro, cabelereira ou manicure de sua preferência,
       além de descobrir todos os serviços que o estabelecimento que você gosta lhe oferece.
</p>


    <div id="botao"><a href="cadastro">Cadastre-se</a></div>

    </div>


</div>


    <div class="rodape">

            <div class="link-1">
                <img src="imagens/Logo.png" width="80%" height="100%">

            </div>

        <div class="link-1">
            <a id="cor-2"  href="">Inicio</a >
            <a id="cor-2" href="">Promoções</a >
            <a id="cor-2" href="login">Login</a >
            <a id="cor-2" href="cadastro">Cadastro</a >
        </div>

        <div class="link-1">
            <a id="cor-2" href="servico-profissional">Serviços</a >
            <a id="cor-2" href="agendamento">Agendamentos</a >
            <a id="cor-2" href="profissional">profissionais</a >
        </div>

        <div class="link-1">
            <a id="cor-2" href="#conteudo-5">Sobre nós</a >
            <a id="cor-2" href="contato">Contato</a >
            <a id="cor-2" href="">Aplicativo</a >
        </div>

        <div class="link-1">
            <a id="cor-2" href="">Suporte</a >
            <a id="cor-2" href="">FAQ</a >
            <a id="cor-2" href="">Telefone</a>
        </div>

    </div>

<script>

function foco () {
    var foco = window.document.getElementById('saiba-mais')
    foco.innerText = 'Conheça mais a Raycuts'
}

function saiu () {
    var saiu = window.document.getElementById('saiba-mais')
    saiu.innerText = 'Saiba mais'
}

window.sr = ScrollReveal({ reset: true});

sr.reveal ('.conteudo-1', {duration: 2000});

sr.reveal ('.container-conteudo-2', {duration:2000});

sr.reveal ('.parte-2', {duration:6000});

sr.reveal ('.container-conteudo-3', {duration:2000});

sr.reveal ('.container-conteudo-4', {duration:2000});

sr.reveal ('.container-conteudo-5', {duration:2000});



</script>
</body>
</html>
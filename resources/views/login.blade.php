<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

    <title>Login</title>
</head>
<body>
    <div id="teste">
    <div id="container-principal">

    <div id="container-ponta-esquerda"><img src="imagens/imagem1.png" width="100%" height="100%"> 

        

    </div>

    <hr class="linha"> 

    <div id="container-central">

<div id="container-paragrafos">
<p id="paragrafo-1">Encontre aqui</p>
<br>
<br>
<br>
<p id="paragrafo-2">o profissional mais próximo de você</p>
<br>
<br>
<br>
<p id="paragrafo-3">de forma simples e rápida.</p>
</div>




    </div>

    <div id="container-ponta-direita">

    <div id="container-flutuante">
        <p id="paragrafo-4">Olá! <br>Seja bem vindo.</p>
        <br>
        <p id="paragrafo-5">Faça seu login ou <br>cadastre - se.</p>
        <form action="{{ route('login.submit') }}" method="post">
            @csrf <!-- Adiciona o token CSRF do Laravel para proteção -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <br>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
            <br>
        
            <a href="" id="esqueceu">Esqueceu a senha?</a>
        
            <div id="baixo-formulario">
            
            <button type="submit" id="botao-entrar" href="logado">Entrar</button>
            
            <p id="paragrafo-6">ou</p>
    
            <a href="{{ route('cadastro') }}" id="cadastro">Cadastre-se</a>
            </div>   


        </form>

    </div>
    </div>

</div>
</div>

</body>
</html>

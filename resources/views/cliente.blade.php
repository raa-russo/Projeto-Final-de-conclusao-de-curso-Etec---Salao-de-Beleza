<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
    <title>Cadastre-se</title>
</head>
<body>

    <div class="container-menu">
        <div class="menu">
        <div id="logo"><a href="welcome"><img src="imagens/Logo.png" width="200px" ></a></div>
            <div class="container-link">
                <div id="borda"><a href="welcome" class="link-menu">Inicio</a></div>
                <div id="borda"><a href="#conteudo-5" class="link-menu">Sobre nós</a></div>
                <div id="borda"><a href="contato" class="link-menu">Contato</a></div>
                <div id="borda"><a href="login" class="link-menu">Entrar</a></div>
            </div>
        </div>
     
    <!--Fim do menu-->

<!--Conteudo central-->
<div id="imagem-fundo">
    <div class="container-escrita">
        <div class="escrita">
            <h2>Estamos quase lá, preencha com suas informações:</h2>
            <h1>Cadastro Cliente</h1>
        </div>

    </div>

    <div class="container-formulario">
        <div class="formulario">
            <form action="{{url('save_client')}}" method="post">
            @csrf
                <h3>Dados pessoais</h3>
                <br>
                <p>Nome</p>
                <label for="nome"></label>
                <input type="text" name="nome" id="tamanho">
                <p>CPF</p>
                <label for="cpf"></label>
                <input type="string" name="cpf" id="tamanho">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="tamanho">
                <label for="email">Email</label>
                <input type="text" name="email" id="tamanho">
                <p>Endereço</p>
                <label for="endereco"></label>
                <input type="text" name="endereco" id="tamanho">
                <p>Sexo</p>
                <label for="sexo"></label>
                <input type="text" name="sexo" id="tamanho">
                
                <!--<label for="data-nascimento"></label>
                <input type="date" name="data-nascimento" id="tamanho">
-->
                <br>
                <button type="submit" href="sucesso" >Enviar</button>
            </form>
        </div>


</div>



</body>
</html>
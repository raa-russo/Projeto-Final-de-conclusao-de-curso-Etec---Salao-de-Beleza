<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profissional.css') }}">
    <title>Cadastro</title>
</head>
<body>
    
    <div class="container-principal">
        <!--Inicio menu-->
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

        <!--inicio parte escrita-->
        
        <div class="escrita">

            <h1>Cadastro Profissional</h1>
        
            <p>Estamos quase lá, preencha com suas informações:</p>

        </div>

        <div class="container-formulario">

            <!--<div class="formulario">
               <div>
                    <p>Dados pessoais</p>
                    
                    <p>*Nome</p>
                    
                    <label for=""></label>
                    <input type="text" name="" id="tamanho">
                    
                    <p>*CPF</p>
                    
                    <label for=""></label>
                    <input type="number" name="" id="tamanho">
                    
                    <p>*Endereço</p>
                    
                    <label for=""></label>
                    <input type="text" name="" id="tamanho">
                    
                    <p>*Sexo</p>
                    
                    <label for=""></label>
                    <input type="text" name="" id="tamanho">
                    
                    <p>*Data nascimento</p>
                    
                    <label for=""></label>
                    <input type="date" name="" id="tamanho">
                    
                </div>
            </div>-->

            <div class="formulario">
    <form action="{{ url('save_profissional') }}" method="post">
        @csrf
        <p>Dados do Profissional</p>

        <p>Nome</p>
        <label for="nome"></label>
        <input type="text" name="nome" id="tamanho">

        <p>CNPJ</p>
        <label for="cnpj"></label>
        <input type="text" name="cnpj" id="tamanho">

        <p>Endereço</p>
        <label for="endereco"></label>
        <input type="text" name="endereco" id="tamanho">

        <p>Email</p>
        <label for="email"></label>
        <input type="text" name="email" id="tamanho">

        <p>Senha</p>
        <label for="senha"></label>
        <input type="password" name="senha" id="tamanho">

        <p>Tipo de serviço</p>
        <select name="servico" id="servico" class="select-fundo" style="background-color: #ffffff !important; color: #000000 !important;">
            <option disabled selected> -- selecione -- </option>
            @foreach($servicos as $servico)
                <option value="{{ $servico->id }}">
                    {{ $servico->nome }}
                </option>
            @endforeach
        </select>


        <button type="submit" id="botao">Enviar</button>
    </form>
</div>

        </div>

<div id="rodape">

</div>
    </div>

    </div>
    
</body>
</html>
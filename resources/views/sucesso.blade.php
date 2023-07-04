<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sucesso.css') }}">
    <title>Cadastro Realizado com Sucesso</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        .success-icon {
            color: #27ae60;
            font-size: 80px;
            margin-bottom: 20px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #27ae60;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #219653;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div id="logo"><img src="imagens/Logo.png" width="200px" ></div>
        <div class="container-link">
            <div id="borda"><a href="welcome" class="link-menu">Inicio</a></div>
            <div id="borda"><a href="#conteudo-5" class="link-menu">Sobre nós</a></div>
            <div id="borda"><a href="contato" class="link-menu">Contato</a></div>
            <div id="borda"><a href="login" class="link-menu">Entrar</a></div>
        </div>
    </div>
    <div class="container">
        <h1>Cadastro Realizado com Sucesso!</h1>
        <span class="success-icon">&#10004;</span>
        <p>O seu cadastro foi realizado com sucesso.</p>
        <a href="home.html" class="back-button">Voltar à página inicial</a>
    </div>
</body>
</html>
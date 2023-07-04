<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contato.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>RAYCUTS</title>
</head>
<body>


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
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: black;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		p {
			text-align: center;
			margin-top: 30px;
			margin-bottom: 30px;
		}

		form {
			width: 50%;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
			color: #444;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #333;
		}

		textarea {
			height: 150px;
			resize: vertical;
		}

		button[type="submit"] {
			display: block;
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}

		button[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Entre em Contato</h1>
	<p>Por favor, preencha o formulário abaixo para entrar em contato conosco.</p>

	<form method="POST" action="enviar-contato.php">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required>

		<label for="assunto">Assunto:</label>
		<input type="text" id="assunto" name="assunto" required>

		<label for="mensagem">Mensagem:</label>
		<textarea id="mensagem" name="mensagem" required></textarea>

		<button type="submit">Enviar</button>
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Sobre Nós - Raycuts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
			background-color: #f2f2f2;
			color: #333333;
			padding: 0;
			margin: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 50px 20px;
			box-sizing: border-box;
		}

		.heading {
			font-size: 2rem;
			font-weight: bold;
			text-align: center;
			margin-bottom: 30px;
		}

		.description {
			font-size: 1.2rem;
			line-height: 1.5;
			text-align: justify;
			margin-bottom: 30px;
		}

		.services {
			display: flex;
			flex-wrap: wrap;
			margin: 0 -10px;
			padding: 30px 0;
			background-color: #ffffff;
		}

		.service {
			flex: 1 0 300px;
			margin: 0 10px;
			padding: 20px;
			box-sizing: border-box;
			border-radius: 5px;
			background-color: #f2f2f2;
			box-shadow: 0 3px 10px rgba(0,0,0,0.2);
			transition: transform 0.2s ease-in-out;
		}

		.service:hover {
			transform: translateY(-5px);
		}

		.service-icon {
			display: block;
			font-size: 2rem;
			text-align: center;
			margin-bottom: 10px;
			color: #f2f2f2;
			background-color: #333333;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			line-height: 50px;
			margin: 0 auto;
			transition: background-color 0.2s ease-in-out;
		}

		.service:hover .service-icon {
			background-color: #ef5d5d;
		}

		.service-title {
			font-size: 1.2rem;
			font-weight: bold;
			text-align: center;
			margin-bottom: 10px;
		}

		.service-description {
			font-size: 1rem;
			line-height: 1.5;
			text-align: justify;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="heading">Sobre Nós</h1>
		<p class="description">Raycuts surgiu como um simples projeto para o TCC, seu objetivo é ajudar e facilitar a vida daquelas pessoas que tem pouco tempo livre no seu dia a dia, mas que se importam com a beleza e o bem-estar. Na Raycuts você pode agendar um horário em um barbeiro, cabeleireiro ou manicure de sua preferência, além de descobrir todos os serviços que o estabelecimento que você gosta lhe oferece.</p>
        <div class="services">
            <div class="service">
                <span class="service-icon"><i class="fas fa-cut"></i></span>
                <h2 class="service-title">Corte de cabelo masculino</h2>
                <p class="service-description">Corte de cabelo masculino com tesoura, máquina ou navalha.</p>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-paint-brush"></i></span>
                <h2 class="service-title">Coloração de cabelo</h2>
                <p class="service-description">Coloração de cabelo em diversas tonalidades.</p>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-female"></i></span>
                <h2 class="service-title">Corte de cabelo feminino</h2>
                <p class="service-description">Corte de cabelo feminino com tesoura, máquina ou navalha.</p>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-hand-sparkles"></i></span>
                <h2 class="service-title">Manicure e pedicure</h2>
                <p class="service-description">Manicure e pedicure para cuidar das suas unhas.</p>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-male"></i></span>
                <h2 class="service-title">Barba</h2>
                <p class="service-description">Corte e cuidados com a barba masculina.</p>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-spa"></i></span>
                <h2 class="service-title">Tratamentos de beleza</h2>
                <p class="service-description">Tratamentos para cuidar da sua beleza.</p>
            </div>
        </div>
    </div>
</body>
</html>    

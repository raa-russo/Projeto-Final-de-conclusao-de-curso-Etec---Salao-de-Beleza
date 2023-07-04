<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.profissional.css') }}">
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
     
<div class="teste">

<?php
// Recupera todos os registros da tabela de profissionais
$profissionais = DB::select("select  us.*, sc.nome as servico_nome from usuarios us left join servicos sc on sc.id = us.servico_id where us.tipo_usuario_id=2");
// Verifica se existem profissionais encontrados
if (count($profissionais) > 0) {
    echo '<table style="border-collapse: collapse; width: 100%; background-color: transparent; color: black;">';
    echo '<tr style="background-color: #333333; color: #ffffff; font-weight: bold;">';
    echo '<td style="padding: 10px; border: 1px solid #dddddd;">Nome do profissional</td>';
    echo '<td style="padding: 10px; border: 1px solid #dddddd;">Tipo de serviço prestado</td>';
    echo '<td style="padding: 10px; border: 1px solid #dddddd;">Cidade do profissional</td>';
    echo '<td style="padding: 10px; border: 1px solid #dddddd;">Visitar perfil</td>';
    echo '</tr>';

    foreach ($profissionais as $profissional) {
        if ($profissional->tipo_usuario_id == 2) {
            echo '<tr>';
            echo '<td style="padding: 10px; border: 1px solid #dddddd;">' . $profissional->nome . '</td>';
            echo '<td style="padding: 10px; border: 1px solid #dddddd;">' . $profissional->servico_nome . '</td>';
            echo '<td style="padding: 10px; border: 1px solid #dddddd;">' . $profissional->endereco . '</td>';
            if ($profissional->servico_id == 1) {
            echo '<td style="padding: 10px; border: 1px solid #dddddd;"><a href="' . route('servico-profissional') . '">Ver perfil</a></td>';
            echo '</tr>';
        }
        if ($profissional->servico_id == 2) {
            echo '<td style="padding: 10px; border: 1px solid #dddddd;"><a href="' . route('servico-profissional2') . '">Ver perfil</a></td>';
            echo '</tr>';
        }

        if ($profissional->servico_id == 3) {
            echo '<td style="padding: 10px; border: 1px solid #dddddd;"><a href="' . route('servico-profissional3') . '">Ver perfil</a></td>';
            echo '</tr>';
        }
        }
    }

    echo '</table>';
} else {
    echo 'Nenhum profissional encontrado.';
}
?>

   <!-- <h1>Escolha o tipo de serviço que deseja:</h1>
<div class="link-filtro">
      <!--<button id="cabelereira-btn">Cabelereira</button>
    <button id="manicure-btn">Manicure</button>
    <button id="barbearia-btn">Barbearia</button>
    
   
</div>
    <div id="lista-empresas"></div>

    <script>
        const cabelereiraEmpresas = [
            {nome: 'Salão da Maria', link: 'servico-profissional'},
            {nome: 'Corte & Cor', link: 'servico-profissional'},
            {nome: 'Bela Cabeleireira', link: 'servico-profissional'}
        ];

        const manicureEmpresas = [
            {nome: 'Unhas Perfeitas', link: 'servico-profissional'},
            {nome: 'Esmalte & Arte', link: 'servico-profissional'},
            {nome: 'Studio das Unhas', link: 'servico-profissional'}
        ];

        const barbeariaEmpresas = [
            {nome: 'Barbearia do Zé', link: 'servico-profissional'},
            {nome: 'Corte Masculino', link: 'servico-profissional'},
            {nome: 'Barba & Cia', link: 'servico-profissional'}
        ];

        const cabelereiraBtn = document.getElementById('cabelereira-btn');
        const manicureBtn = document.getElementById('manicure-btn');
        const barbeariaBtn = document.getElementById('barbearia-btn');
        const listaEmpresas = document.getElementById('lista-empresas');

        cabelereiraBtn.addEventListener('click', () => {
            listaEmpresas.innerHTML = '';
            cabelereiraEmpresas.forEach(empresa => {
                const nomeEmpresa = document.createElement('p');
                const linkEmpresa = document.createElement('a');
                nomeEmpresa.innerText = empresa.nome;
                linkEmpresa.innerText = 'Visitar o perfil';
                linkEmpresa.href = empresa.link;
                listaEmpresas.appendChild(nomeEmpresa);
                listaEmpresas.appendChild(linkEmpresa);
            });
        });

        manicureBtn.addEventListener('click', () => {
            listaEmpresas.innerHTML = '';
            manicureEmpresas.forEach(empresa => {
                const nomeEmpresa = document.createElement('p');
                const linkEmpresa = document.createElement('a');
                nomeEmpresa.innerText = empresa.nome;
                linkEmpresa.innerText = 'Visitar o perfil';
                linkEmpresa.href = empresa.link;
                listaEmpresas.appendChild(nomeEmpresa);
                listaEmpresas.appendChild(linkEmpresa);
            });
        });

        barbeariaBtn.addEventListener('click', () => {
            listaEmpresas.innerHTML = '';
            barbeariaEmpresas.forEach(empresa => {
                const nomeEmpresa = document.createElement('p');
                const linkEmpresa = document.createElement('a');
                nomeEmpresa.innerText = empresa.nome;
                linkEmpresa.innerText = 'Visitar o perfil';
                linkEmpresa.href = empresa.link;
                listaEmpresas.appendChild(nomeEmpresa);
                listaEmpresas.appendChild(linkEmpresa);
            });
        });
    </script>
    -->
</body



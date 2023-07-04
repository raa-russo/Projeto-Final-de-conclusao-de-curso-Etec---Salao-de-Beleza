<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/logado.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>RAYCUTS</title>
</head>
<body>

<div class="container-menu">
  <div class="menu">
  <div id="logo"><a href="welcome"><img src="imagens/Logo.png" width="200px" ></a></div>
    <div class="container-link">
      <div id="borda"><a href="welcome" class="link-menu">Inicio</a></div>
      <div id="borda"><a href="servico-profissional" class="link-menu">Meus serviços</a></div>
      <div id="borda"><a href="contato" class="link-menu">Contato</a></div>
      <div id="borda"><a href="welcome" class="link-menu">Sair</a></div>
    </div>
    <div id="user" class="profile-pic">
      <img src="imagens/clientee.jpg" onclick="trocarImagem()">
    </div>
  </div>
    

<h1>Aqui está a sua agenda do dia...</h1>




<script>

function trocarImagem() {
  const fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.accept = 'image/*';
  fileInput.onchange = () => {
    const file = fileInput.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      const img = document.querySelector('.profile-pic img');
      img.src = reader.result;
    };
  };
  fileInput.click();
}
</script>
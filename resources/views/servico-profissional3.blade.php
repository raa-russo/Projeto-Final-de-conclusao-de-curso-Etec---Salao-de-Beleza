<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/servico.profissional3.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>RAYCUTS</title>
</head>
<body>

<div class="container-menu">
  <div class="menu">
  <div id="logo"><a href="welcome"><img src="imagens/Logo.png" width="200px" ></a></div>
    <div class="container-link">
      <div id="borda"><a href="welcome" class="link-menu">Inicio</a></div>
      <div id="borda"><a href="agenda.profissional.html" class="link-menu">Minha agenda</a></div>
      <div id="borda"><a href="contato" class="link-menu">Contato</a></div>
      <div id="borda"><a href="welcome" class="link-menu">Sair</a></div>
    </div>
    <div id="user" class="profile-pic">
      <img src="imagens/clientee.jpg" onclick="trocarImagem()">
    </div>
    
  </div>

  <div id="container">
    
      <h2>Esses são os serviços que ofereço no meu salão:</h2>
      <div class="imagens">
      <div class="image-box" onclick="adicionarImagem(1)">
        <div class="image-placeholder">
          <div class="image-preview" id="imagem-preview1"></div>
          <div class="image-overlay-1">Unha mão</div>
        </div>
      </div>
      <div class="image-box" onclick="adicionarImagem(2)">
        <div class="image-placeholder">
          <div class="image-preview" id="imagem-preview2"></div>
          <div class="image-overlay-2">Unha pé</div>
        </div>
      </div>
      <div class="image-box" onclick="adicionarImagem(3)">
        <div class="image-placeholder">
          <div class="image-preview" id="imagem-preview3"></div>
          <div class="image-overlay-3">Unha mão e pé</div>
        </div>
      </div>
    </div>

  <h2>Bora agendar o seu horário?...</h2>
  <div id="container-clique">
<div class="clique" id="saiba-mais">
  <a href="agendamento" id="teste" onmouseenter="foco()" onmouseout="saiu()">Clique</a>

</div>
</div>
  </div>
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


function adicionarImagem(numero) {
  var input = document.createElement("input");
  input.type = "file";
  input.accept = "image/*";
  input.onchange = function(event) {
    var imagemPreview = document.getElementById("imagem-preview" + numero);
    imagemPreview.style.backgroundImage = "url('" + URL.createObjectURL(event.target.files[0]) + "')";
    var imagemOverlay = imagemPreview.parentNode.querySelector(".image-overlay");
    imagemOverlay.style.display = "none";
    imagemPreview.onclick = function() {
      input.click();
    };
    imagemPreview.style.display = "block";
  };
  input.click();
}

function foco () {
    var foco = window.document.getElementById('teste')
    foco.innerText = 'Clique aqui para agendar'
}

function saiu () {
    var saiu = window.document.getElementById('teste')
    saiu.innerText = 'Clique'
}


  </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>RAYCUTS</title>
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
 
<!--Fim do menu

	<h1>Agendamento de Serviços</h1>
	<div class="buttons">
		<button class="button" id="cabelereiro">Cabelo</button>
		<button class="button" id="barba">Barba</button>
		<button class="button" id="sobrancelha">Sobrancelha</button>
		<button class="button" id="manicure">Manicure</button>
	</div>
	<div class="calendario">
		<!-- calendario aqui 
		
		  <table>
			<thead>
			  <tr>
				<th>Dia/Hora</th>
				<th>10:00</th>
				<th>11:00</th>
				<th>12:00</th>
				<th>13:00</th>
				<th>14:00</th>
				<th>15:00</th>
				<th>16:00</th>
				<th>17:00</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Segunda</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
			  </tr>
			  <tr>
				<td>Terça</td>
				<td>O</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
			  </tr>
			  <tr>
				<td>Quarta</td>
				<td>O</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
			  </tr>
			  <tr>
				<td>Quinta</td>
				<td>O</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
				<td>O</td>
			  </tr>
			  <tr>
				<td>Sexta</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
			  </tr>
			  <tr>
				<td>Sábado</td>
				<td>O</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
				<td>O</td>
				<td>O</td>
			  </tr>
			  <tr>
				<td>Domingo</td>
				<td>X</td>
				<td>O</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
			  </tr>
			</tbody>
		  </table> 
		  

      

	</div>

  <div class="botoes">
    <button id="submit">Mostrar profissionais disponíveis</button>
  <div id="empresas-disponiveis"></div>


  <button id="finalizar-agendamento">Finalizar Agendamento</button>
      <div id="mensagem"></div>
    </div>

	<br>
	<br>
	<!-- Widget em linha do Calendly - início -->
<div class="calendly-inline-widget" data-url="https://calendly.com/raycuts" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Widget em linha do Calendly - fim -->
 



 <script>

const btnFinalizarAgendamento = document.getElementById("finalizar-agendamento");
btnFinalizarAgendamento.addEventListener("click", function() {
  const mensagem = document.getElementById("mensagem");
  mensagem.textContent = "Agendamento realizado com sucesso!";
});


  const submitBtn = document.getElementById('submit');
  const empresasDiv = document.getElementById('empresas-disponiveis');

  submitBtn.addEventListener('click', () => {
    const diaHora = document.querySelector('.calendario th:nth-child(1)').textContent;
    const horaSelecionada = document.querySelector('.calendario td:hover').textContent;
    const empresasDisponiveis = getEmpresasDisponiveis(diaHora, horaSelecionada);

    empresasDiv.innerHTML = '';
    empresasDisponiveis.forEach(empresa => {
      const p = document.createElement('p');
      p.textContent = empresa;
      empresasDiv.appendChild(p);
    });
  });

  function getEmpresasDisponiveis(diaHora, horaSelecionada) {
    // Aqui você implementaria a lógica para obter as empresas disponíveis
    // com base no dia e hora selecionados e retornaria um array com os nomes das empresas
    return ['José Barbeiro', 'Salão da Carla', 'Ana Manicure'];
  }


document.querySelectorAll("td").forEach(td => {
  td.addEventListener("click", () => {
    if (td.classList.contains("selected")) {
      td.classList.remove("selected");
    } else {
      td.classList.add("selected");
    }
  });
});

document.querySelector("#submit").addEventListener("click", () => {
  const selectedCells = document.querySelectorAll("td.selected");
  const selectedTimes = Array.from(selectedCells).map(cell => cell.textContent);
  console.log(`Horários selecionados: ${selectedTimes.join(", ")}`);
});

// Adiciona um ouvinte de eventos ao botão "Enviar Seleção"
document.getElementById("submit").addEventListener("click", function() {
  // Obtém a tabela
  var table = document.getElementsByTagName("table")[0];

  // Obtém a célula selecionada
  var selectedCell = null;
  for (var i = 1; i < table.rows.length; i++) {
    for (var j = 1; j < table.rows[i].cells.length; j++) {
      var cell = table.rows[i].cells[j];
      if (cell.classList.contains("selected")) {
        selectedCell = cell;
        break;
      }
    }
    if (selectedCell) {
      break;
    }
  }

  // Exibe a lista de empresas disponíveis
  var empresasDisponiveis = getEmpresasDisponiveis(selectedCell);
  var listaEmpresas = document.getElementById("empresas-disponiveis");
  listaEmpresas.innerHTML = "";
  for (var i = 0; i < empresasDisponiveis.length; i++) {
    var empresa = empresasDisponiveis[i];
    var itemLista = document.createElement("li");
    itemLista.innerHTML = empresa;
    listaEmpresas.appendChild(itemLista);
  }
});

// Adiciona um ouvinte de eventos às células da tabela
var cells = document.getElementsByTagName("td");
for (var i = 0; i < cells.length; i++) {
  var cell = cells[i];
  cell.addEventListener("click", function() {
    // Remove a classe "selected" de todas as células
    var cells = document.getElementsByTagName("td");
    for (var i = 0; i < cells.length; i++) {
      cells[i].classList.remove("selected");
    }

    // Adiciona a classe "selected" à célula selecionada
    this.classList.add("selected");
  });
}

// Retorna a lista de empresas disponíveis para o dia e horário selecionados
function getEmpresasDisponiveis(cell) {
  // Adicione aqui a lógica para obter a lista de empresas disponíveis com base na data e hora selecionadas
  return ['José Barbeiro', 'Salão da Carla', 'Ana Manicure'];
}





 </script>



	  



    
</body>
</html>

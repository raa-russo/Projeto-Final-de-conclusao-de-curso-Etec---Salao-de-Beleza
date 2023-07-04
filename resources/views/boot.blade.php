<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/boot.css') }}">
    
    <title>Chatbot Raycuts</title>
   
</head>
<body>
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
    </div>
    <!--Fim do menu-->
    
    <div class="container-chat">
        <h1>Chatbot Raycuts</h1>
        <div id="chat-container">
            <div id="chat-log"></div>
            <input type="text" id="user-input" placeholder="Digite sua mensagem...">
            <button id="send-button">Enviar</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Array de perguntas e respostas
            const conversas = [
                { pergunta: "Olá", resposta: "Olá, como posso ajudar?" },
                { pergunta: "oi", resposta: "oie, como posso ajudar?" },
                { pergunta: "teste", resposta: "oie, como posso ajudar?" },
                { pergunta: "Qual é o seu nome?", resposta: "Sou a inteligência artificial da Raycuts, em que posso ajudar?." },
                { pergunta: "nome?", resposta: "Sou a inteligência artificial da Raycuts, em que posso ajudar?." },
                { pergunta: "Qual é a resposta para a vida, o universo e tudo mais?", resposta: "42" },
                { pergunta: "Obrigado", resposta: "De nada, estou aqui para ajudar!" },
                { pergunta: "Tchau", resposta: "Até mais, tenha um bom dia!" }
            ];

            // Função para exibir uma mensagem no chat
            function exibirMensagem(texto, sender) {
                const chatLog = document.getElementById("chat-log");
                const mensagem = document.createElement("div");
                mensagem.classList.add(sender);
                mensagem.innerText = texto;
                chatLog.appendChild(mensagem);
            }

            // Função para processar a entrada do usuário
            function processarEntrada() {
                const userInput = document.getElementById("user-input");
                const userMessage = userInput.value;
                
                if (userMessage.trim() === "") {
                    return; // Ignorar entrada vazia
                }
                
                exibirMensagem(`Você: ${userMessage}`, "user");

                // Converter mensagem do usuário para minúscula

                const userMessageLower = userMessage.toLowerCase();

// Procurar resposta correspondente
let respostaEncontrada = false;
for (let i = 0; i < conversas.length; i++) {
    const pergunta = conversas[i].pergunta.toLowerCase();
    if (userMessageLower.includes(pergunta)) {
        const resposta = conversas[i].resposta;
        exibirMensagem(`Chatbot: ${resposta}`, "chatbot");
        respostaEncontrada = true;
        break;
    }
}

if (!respostaEncontrada) {
    exibirMensagem("Chatbot: Desculpe, não entendi. Por favor, reformule a pergunta.", "chatbot");
}

userInput.value = "";
}

// Evento de clique no botão Enviar
document.getElementById("send-button").addEventListener("click", processarEntrada);

// Evento de pressionar Enter no campo de entrada
document.getElementById("user-input").addEventListener("keydown", function(event) {
if (event.key === "Enter") {
    processarEntrada();
}
});
});
</script>
</body>
</html>


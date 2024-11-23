<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        body.dark {
            background-color: #333333;
            color: #ffffff;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <script>
        function alterarTema() {
            const body = document.body;
            const botao = document.getElementById("botaoAlterar");

            if (body.className === "dark") {
                body.className = ""; // Remove a classe dark
                button.textContent = "Mudar para Tema Escuro";
            } else {
                body.className = "dark";
                button.textContent = "Mudar para Tema Claro";
            }
        }
    </script>
</head>
<body>
    <p>Ao clicar em um botão, o tema da página deve alternar entre claro e escuro. Objetivo:
        Praticar a manipulação de estilos CSS de forma abrangente para alterar temas.</p>
    
    <h1>Alterar Tema Claro e Escuro</h1>
    <button id="botaoAlterar" onclick="alterarTema()">Mudar para Tema Escuro</button>
</body>
</html>

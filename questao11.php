<!DOCTYPE html>
<html>
    <head>
        <script>
            function alterarEstilo(){
                const elemento = document.getElementById("meuElemento");
                elemento.classList.toggle("novoEstilo");
            }
        
        
        </script>
        <style>
            
            .estiloInicial{
                background-color: lightblue;
                color: black;
                padding: 20px;
                text-align: center;
                font-size: 20px;
                
            }
            .novoEstilo{
                background-color: lightgreen;
                color: white;
                font-size: 26px;
                font-family: Arial;
            }
        </style>
        
    </head>
    <body>
        <p>
            Ao clicar em um botão, a classe CSS de um elemento deve ser alterada para aplicar novos
estilos. Objetivo: Praticar a manipulação de classes CSS e a aplicação de estilos dinâmicos.
        </p>
        <div id="meuElemento" class="estiloInicial">Estilo que vai mudar!</div>
        
        <button onclick="alterarEstilo()">Alterar estilo</button>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <script>
            function aparecerMensagem() {
                let textInput = document.getElementById('inputTexto');
                let textoDigitado = textInput.value;
                
                if (textoDigitado === '') {
                    alert('Você não digitou nada. Tente novamente!');
                } else {
                    alert(`Você digitou: ${textoDigitado}`);
                    textInput.value = '';
                }
            }
        </script>
    </head>
    <body>
        <p>
            Ao clicar em um botão, uma mensagem de alerta deve ser exibida com o texto
            de um campo de entrada. Objetivo: Praticar a coleta de valores de campos 
            de entrada e o uso de caixas de diálogo.
        </p>
        <div>
            Digite o que deseja: <input type="text" id="inputTexto">
        
            <input type="button" value="Enviar" onclick="aparecerMensagem()">
        </div>    
    </body>
</html>

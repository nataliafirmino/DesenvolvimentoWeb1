<!DOCTYPE html>
<html>
    <head>
        <script>
            function contar(){
                let span = document.getElementById("contador");
                let contador = Number(span.innerHTML);
                
                contador+=1;
                
                span.innerHTML = contador;
            }
        </script>
    </head>
    <body>
        <div>
            <p>Cada vez que um botão é clicado, um contador deve ser incrementado e exibido. 
                Objetivo: Praticar o uso de variáveis para armazenar dados
                e a atualização do DOM.
            </p>
            
            Valor do contador: <span id="contador">0</span>
            <br>
            <input type="button" value="Incrementar" onclick="contar()"
        </div>
    </body>
</html>

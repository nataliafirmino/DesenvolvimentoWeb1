<!DOCTYPE html>

<html>
    <head>
        <script>
            function mudarTexto(){
                document.getElementById("textoQueEuQueroMudar").innerHTML=
                        "Desenvolvimento <b style='color:red'>Web</b> I";
            }
            
        </script>
    </head>
    <body>
        <p>Ao clicar em um botão, o texto de um parágrafo específico deve ser alterado. 
            Objetivo: Praticar a seleção de elementos e a manipulação de texto.</p>
        <div>
            <input type="button" value="Mudar texto" onclick="mudarTexto()"/>
        </div>
        <div
            id="textoQueEuQueroMudar">Olá!
        </div>
         

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <script>
            var visivel = true;
            function mostrarOcultar(){
                if (visivel){
                    document.getElementById("divParaAlternar").style.display="none";
                    document.getElementById("botao").value="Mostrar";
                    visivel=false;
                }
                else{
                    document.getElementById("divParaAlternar").style.display="block";
                    document.getElementById("botao").value="Ocultar";
                    visivel=true;
                    
                }
            }
        </script>
            
        <style>
            .invisivel{
                display:none;
            }
            .visivel{
                display:block;
            }
        </style>
    </head>
    <body>
        <input type="button" value="Ocultar" id="botao" onclick="mostrarOcultar()"/>
        <div id="divParaAlternar">
            Ao clicar em um botão, um elemento deve alternar entre visível e oculto. 
            Objetivo: Praticar a manipulação de estilos CSS para controlar a visibilidade.
        </div>
    </body>
</html>

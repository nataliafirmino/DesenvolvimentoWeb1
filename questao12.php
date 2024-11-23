<!DOCTYPE html>

<html>
    <head>
        <script>
            function alterarEstilo(){
                let imagem = document.getElementById("imagem");
                
                if(imagem.classList.contains("semEstilo")){
                    imagem.classList.remove("semEstilo");
                    imagem.classList.add("comEstilo");     
                }else{
                    imagem.classList.remove("comEstilo");
                    imagem.classList.add("semEstilo"); 
                    
                }
            }
        </script>
        <style>
            img{
                max-width: 600px;
                max-height: 300px;
            }
            .semEstilo{
                border-radius: 0%;
            }
            .comEstilo{
                border-radius: 50%;
            }
        </style>
        
    </head>
    <body>
        <h1>Passe o mouse sobre a imagem</h1>
        <img id="imagem" class="semEstilo" onmouseover="alterarEstilo()" onmouseout="alterarEstilo()"
             src="https://tm.ibxk.com.br/2017/07/13/13160112901226.jpg" alt=""/>
    </body>
</html>

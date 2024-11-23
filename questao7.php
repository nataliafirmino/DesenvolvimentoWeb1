<!DOCTYPE html>
<html>
    <head>
        <script>
            function mudarImagem(novaImagem){
                const imagem = document.getElementById("imagem");
                imagem.src = novaImagem;
            }
        </script>
    </head>
    <body>
       
        <img id="imagem" src="https://tm.ibxk.com.br/2017/07/13/13160112901226.jpg" alt="Imagem" 
             onmouseover="mudarImagem('https://www.designi.com.br/images/preview/10097608.jpg')" onmouseout="mudarImagem('https://tm.ibxk.com.br/2017/07/13/13160112901226.jpg')">
    </body>
    
</html>

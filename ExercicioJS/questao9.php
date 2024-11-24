<!DOCTYPE html>
<html>
    <head>
        <script>
        function ajustarTamanhoImagem() {
        let slider = document.getElementById("slider");
        let imagem = document.getElementById("imagem");
        
        imagem.style.width = slider.value + "%";
        imagem.style.height = "auto"; 
        
        } 
        </script>
    </head>
    <body>
        <input type="range" id="slider" min="10" max="100" value="50" onchange="ajustarTamanhoImagem()">
        <img src="https://tm.ibxk.com.br/2017/07/13/13160112901226.jpg" id="imagem"/>
    </body>
</html>

<html>
    <head>
    </head>
    <body>
        <p>Ao passar o mouse sobre um elemento, a cor de fundo deve mudar.
            Objetivo: Praticar eventos de mouse e manipulação de estilos CSS.
        </p>

        <div id="elementoQueVaiMudar">
            Este texto vai mudar!
        </div>
        <script>
            const elementoQueVaiMudar = document.getElementById("elementoQueVaiMudar");
            elementoQueVaiMudar.addEventListener("mouseover", function() {
                elementoQueVaiMudar.style.color = "green";
            });
            elementoQueVaiMudar.addEventListener("mouseout", function() {
                elementoQueVaiMudar.style.color = "black";
            });
        </script>
    </body>
</html>

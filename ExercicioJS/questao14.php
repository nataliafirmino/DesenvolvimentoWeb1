<!DOCTYPE html>
<html>
<head>
    <style>
        .conteudo {
            display: none;
            padding: 10px;
            border: 1px solid #000;
            margin-top: 10px;
        }
    </style>
    <script>
        function alterarConteudo() {
            let conteudo = document.getElementById("conteudoAcordeao");
            let botao = document.getElementById("botaoAlterar");

            if (conteudo.style.display === "none") {
                conteudo.style.display = "block";
                botao.textContent = "Ocultar Conteúdo";
            } else {
                conteudo.style.display = "none";
                botao.textContent = "Mostrar Conteúdo";
            }
        }
        document.getElementById("conteudoAcordeao").style.display = "none";
    </script>
</head>
<body>
    <div class="acordeao">
        <button id="botaoAlterar" onclick="alterarConteudo()">Mostrar Conteúdo</button>
        <div class="conteudo" id="conteudoAcordeao">
            <p>Ao clicar em um botão, uma seção de conteúdo deve expandir ou recolher. 
 Objetivo: Praticar a manipulação de altura de elementos e a criação de um efeito de acordeão.</p>
        </div>
    </div>
</body>
</html>

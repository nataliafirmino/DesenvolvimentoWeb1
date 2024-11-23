<!DOCTYPE html>
<html>
    <head>
        <script>  
        function adicionarProduto(){
            let adicionarItem = document.getElementById("adicionarItem");
            let listaProdutos = document.getElementById("lista");
            let novoElemento = document.createElement("li");
            novoElemento.innerHTML = adicionarItem.value;
            listaProdutos.appendChild(novoElemento);
        }
        </script>
    </head>
    <body>
        <p>Ao clicar em um botão, um novo item deve ser adicionado ao final de uma lista HTML.
            Objetivo: Praticar a criação e adição de elementos ao DOM.
        </p>
        <h2>Lista de Produtos</h2>
        <input type="text" id="adicionarItem"/>
        <input type="button" value="Adicionar" id="botao" onclick="adicionarProduto()"/>
        <ul id="lista">
        </ul>
    </body>
</html>

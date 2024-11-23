<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script> 
            function adicionarProduto(){
            let adicionarItem = document.getElementById("adicionarItem");
            let listaProdutos = document.getElementById("lista");
            let novoElemento = document.createElement("li");
            novoElemento.innerHTML = adicionarItem.value;
            listaProdutos.appendChild(novoElemento);
            
            let botaoRemover = document.createElement("button");
            botaoRemover.innerHTML = "Remover";
            novoElemento.appendChild(botaoRemover);
            botaoRemover.onclick = function(event){
                let itemLista = event.target.parentNode;
                itemLista.style.display = "none";
            }
        }     
        </script>
    </head>
    <body>
        <p>
            Ao clicar em um botão ao lado de um item da lista, esse item deve ser removido. 
            Objetivo: Praticar a remoção de elementos do DOM.
        </p>
        <div>
            <input type="text" id="adicionarItem">
            <input type="button" value="Adicionar" onclick="adicionarProduto()">
            <ul id="lista">  
            </ul>
        </div>
    </body>
</html>

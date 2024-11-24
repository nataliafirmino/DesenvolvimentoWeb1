<!DOCTYPE html>
<html>
    <head>
        <script>
            function pesquisarPokemon(){
                //pegar o numero do Pokémon
                var numero = document.getElementById("numero").value;
                //solicitar o nome do Pokémon pelo número
                fetch("https://pokeapi.co/api/v2/pokemon/" + numero)
                        .then(response=>{
                            return response.json();    
                }).then(pokemon => {
                    //atualizar o campo texto com o nome
                    console.log(pokemon);
                    var nome = document.getElementById("nome");
                    nome.value = pokemon.forms[0].name;
                });     
            }
        </script>
    </head>
    <body>
        <div>
        <input type="number" id="numero"/>
        <input type="button" value="Pesquisar Pokémon"
               onclick="pesquisarPokemon()"/>
        </div>
        <h1>Dados do Pokémon</h1>
        <div>
            Nome: <input type="text" id="nome" readonly/>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <script>
            function consultarCEP(){
                let cep = document.getElementById("inputCEP").value;
                
            
            fetch('https://viacep.com.br/ws/'+cep+'/json/').then(res =>{
                return res.json();
            }).
            then(json => {
                console.log(json);
                document.getElementById("logradouro").value=json.logradouro;
                document.getElementById("bairro").value=json.bairro;
                document.getElementById("cidade").value=json.localidade;
                document.getElementById("estado").value=json.estado;
            })
        }
        </script>
    </head>
    <body>
        CEP: <input type="number" place="Digite apenas números" id="inputCEP">
        <input type="button" value="Consultar" onclick="consultarCEP()">
        <h1>Dados</h1>
        
        <div>
            Logradouro: 
            <input type="text" id="logradouro">
        </div>
        <div>
            Bairro:
            <input type="text" id="bairro">
        </div>
        <div>
            Cidade: 
            <input type="text" id="cidade">
        </div>
        <div>
            Estado: 
            <input type="text" id="estado">
        </div>
    </body>
</html>
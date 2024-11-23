<!DOCTYPE html>
<html>
    <head>
        <script>
            function validarFormulario(event){
                event.preventDefault();
                let inputEmail = document.getElementById("inputEmail");
                let inputSenha = document.getElementById("inputSenha");
                
                let pattern = new RegExp('([A-Za-z0-9_\.]*)@([a-z]+)(\.[a-z]+)', 'g');
                
                if (pattern.test(inputEmail.value)) {
                } else {
                    alert('E-mail inválido');
                    return;
                }
                if (inputSenha.value.length < 6) {
                    alert('A senha deve ter no mínimo 6 caracteres');
                    return;
                }
                alert('Validação concluída com sucesso!');
                inputEmail.value='';
                inputSenha.value='';
            }
        
        </script>
    </head>
    <body>
        <h1>Formulário</h1>
        <form>
        <div>Email: <input type="text" id="inputEmail"></div>
        <div>Senha: <input type="text" id="inputSenha"></div>
        <button type="submit" onclick="validarFormulario(event)">Enviar</button>
        </form>
    </body>
</html>

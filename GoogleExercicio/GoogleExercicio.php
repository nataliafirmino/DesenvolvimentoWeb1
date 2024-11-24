<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Google</title>
        <!-- Linkando o arquivo CSS externo -->
        <link rel="stylesheet" href="./Style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
    <body>
        <div class="nav">
            <a href="#">Gmail</a>
            <a href="#">Imagens</a>
            <i class="bi bi-person-circle"></i>
        </div>

        <div class="corpoPrincipal">
            <img src="./img/google.png" alt=""/>
            <div class="inputIcon" >
                <i class="bi bi-search"></i><!--pesquisar-->
                <input type="text"/>
                <i class="bi bi-keyboard"></i><!--Teclado-->
                <i class="bi bi-mic"></i><!--microfone-->
                <i class="bi bi-camera"></i><!--câmera-->              
            </div>

            <div class="buttons">
                <input type="button" value="Pesquisa Google"/>
                <input type="button" value="Estou com sorte"/>     
            </div>     
        </div>

        <div class="rodape">
            <div>
                <p>Brasil</p>
            </div>
            <div class="rodapeLinks">
                <div>
                    <a href="https://about.google/?utm_source=google-BR&utm_medium=referral&utm_campaign=hp-footer&fg=1">
                        Sobre
                    </a>
                    <a href="https://www.google.com/intl/pt-BR_br/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1">
                        Publicidade
                    </a>
                    <a  href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpbfooter&fg=1">
                        Negócios
                    </a>
                    <a href="https://google.com/search/howsearchworks/?fg=1">
                        Como funciona a Pesquisa
                    </a>
                </div>
                <div>
                    <a href="https://policies.google.com/privacy?hl=pt-BR&fg=1">
                        Privacidade
                    </a>
                    <a href="https://policies.google.com/terms?hl=pt-BR&fg=1">
                        Termos
                    </a>
                    <a href="#">
                        Configurações
                    </a>
                </div>
            </div>         
        </div>
    </body>
</html>


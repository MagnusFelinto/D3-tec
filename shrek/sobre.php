<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Página principal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-green w3-wide w3-padding w3-card">
            <a href="index.php" class="w3-bar-item w3-button"><b>Página principal</b></a>  
            <div class="w3-right w3-hide-small">
                <a href="logindex.php" class="w3-bar-item w3-button"><b>Login</b></a>
            </div>
            <div class="w3-right w3-hide-small">
                <a href="cadastro.php" class="w3-bar-item w3-button"><b>Cadastrar-se</b></a>
            </div>

            <div class="w3-right w3-hide-small">
                <a href="sobre.php" class="w3-bar-item w3-button"><b>Sobre</b></a>
            </div>
            
        </div>
    </div>
    <div class="w3-content w3-padding" style="max-width:1564px">

        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Sobre</h3>
        </div>
        Este Site tem como intuito informar as pessoas o roteiro seguido para elaboração do primeiro filme do Shrek de forma descontraída e com compromisso com o consumidor.

    <br>
    <br>
    <br>
    <br>
    <div class="w3-row-padding w3-grayscale">
        <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="https://pbs.twimg.com/media/EmGPKWKXgAAQ0hh?format=jpg&name=small" alt="Caio" style="width:100%">
        <h3>Caio Anderson</h3>
        <p class="w3-opacity">CEO & Founder</p>
        <p>Sou Caio Anderson um dos fundadores deste site caso tenha alguma dúvida, deixo abaixo meu contato.</p>
        <p><button class="w3-button w3-light-grey w3-block"><a target="_blank" href="https://github.com/caioandersonf">Contact</a></button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="Vandre.jpeg" alt="Vandré" style="width:100%">
        <h3>Vandré Cortês</h3>
        <p class="w3-opacity">CEO & Founder</p>
        <p>Sou Vandré Cortês um dos fundadores deste site caso tenha alguma dúvida, deixo abaixo meu contato.</p>
        <p><button class="w3-button w3-light-grey w3-block"><a target="_blank" href="https://github.com/vandrecx">Contact</button></p>
    </div>

    </div>

    <footer class="w3-center w3-green w3-padding-16">
    <p><a href="https://github.com/ComputacaoUERN" title="D3TEC" target="_blank" class="w3-hover-text-black">Created by D3TEC</a></p>
    </footer>

</body>
</html>
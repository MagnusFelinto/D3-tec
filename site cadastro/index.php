<?php
session_start();
$_SESSION['msg']="Usuário cadastrado com sucesso"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    body{
        background-image: url(https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/daf587c1f9bdd30168d6792a8876b47e~c5_720x720.jpeg?x-expires=1665086400&x-signature=LI6ylZuj2yYzyYxX9B9M2Yn5SPM%3D);

    }
    .bloco{
        margin-top: 10%;
    }
    .cadastro{
        margin-top: 5%;
    }
    .botao{
        background-color: brown;
        color:white;
        width: 100px;
        height: 30px;
        border-style: solid;
        border-color: white;
    }
    .forms{
        background-color:white;
        margin-top: 5%;
        margin-left: 35%;
        margin-right: 35%;
        width:390px;
        height:270px;
        position:absolute;
        border-radius: 5%;
        border: 5px;
        border-style: solid;
        border-color: brown;
    }
</style>
<body>
    <div class="bloco" align="center">
        <form class="forms" method="post" action="cad.php">
            <p><?php echo $_SESSION['msg'];
            ?></p>
            <h1>Cadastro</h1>
            <label for="text">Nome:</label>
            <input type="text" placeholder="Digite seu nome" class="cadastro" name="nome"> <br>
            <label for="text">Email:</label>
            <input type="email" placeholder="Digite seu email" class="cadastro" name="email"> <br>
            <label for="text">Senha:</label>
            <input type="password" placeholder="Digite sua senha" class="cadastro" name="senha"> <br> <br>
            <div>
                <button class="botao">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>

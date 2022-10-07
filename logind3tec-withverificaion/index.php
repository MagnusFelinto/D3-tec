<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Login</title>
</head>
<style>
    .form{
        height: 98%;
        width: 30%;
        background-color: red;
    }
</style>
<body>
    <div class="cube" align="center">
        <form method="post" action="login.php" class="form" align="center">
            <label for="text">Email:</label> <br>
            <input type="email" name="email">
            <br>
            <label for="text">Senha:</label> <br>
            <input type="password" name="senha"> <br> <br>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
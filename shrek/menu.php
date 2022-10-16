<?php
    session_start();
    if (!isset($_SESSION["usuarioId"])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Roteiro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

<div class="w3-top">
    <div class="w3-bar w3-green w3-wide w3-padding w3-card">
        <a href="menu.php" class="w3-bar-item w3-button"><b>Página do Roteiro</b></a>  
        <div class="w3-right w3-hide-small">
            <a href="sair.php" class="w3-bar-item w3-button">Sair</a>
        </div>
        <div class="w3-right w3-hide-small">
            <a href="index.php" class="w3-bar-item w3-button">Voltar para página principal</a>
        </div>
    </div>
</div>

<div class="w3-content w3-padding" style="max-width:1564px" align="center">
    <div class="w3-container w3-padding-32" id="projects">
    
    <?php 
    include_once("conexao.php");
    $sql    = "SELECT * from roteiro";
    $res    = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($res);
?>
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo $result["titulo"] ; ?></h3>
        <p>SHREK</p>
<p>Escrito por</p>
<p><?php  echo $result["autor"] ; ?></p>
<p class="texto" style="text-align: justify;"><?php echo $result["texto"] ; ?></p>
<p>O FIM</p>
</div>


<footer class="w3-center w3-green w3-padding-16">
  <p><a href="https://github.com/ComputacaoUERN" title="D3TEC" target="_blank" class="w3-hover-text-black">Created by D3TEC</a></p>
</footer>

</body>
</html>
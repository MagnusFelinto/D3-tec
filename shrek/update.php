<?php
    include_once("conexao.php");

    $titulo     = $_POST['titulo'];
    $subtitulo  = $_POST['subtitulo'];
    $texto      = $_POST['texto'];

    $sql1 = "UPDATE roteiro SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE id=1";
    $resu = mysqli_query($conn, $sql1);
?>
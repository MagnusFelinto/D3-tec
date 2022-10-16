<?php
    include_once("conexao.php");

    $titulo     = $_POST['titulo'];
    $subtitulo  = $_POST['subtitulo'];
    $texto      = $_POST['texto'];

    $sql1 = "INSERT INTO roteiro (titulo, subtitulo, texto) VALUES ('$titulo', '$subtitulo', '$texto')";
    $resu = mysqli_query($conn, $sql1);

?>
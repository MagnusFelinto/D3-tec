<?php
    include_once("conexao.php");

    $ti     = $_POST['titulo0'];
    $sub    = $_POST['subtitulo0'];
    $t      = $_POST['texto0'];
    $autor  = $_POST['autor0'];
    $sql1 = "UPDATE roteiro SET titulo = '$ti', subtitulo ='$sub', autor = '$autor', texto = '$t' WHERE id = 1";
    //$resu =  mysqli_query($conn, $sql1);
    $conn->query($sql1);
    echo "GDS";

?>
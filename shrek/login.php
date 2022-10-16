<?php
    session_start();
    include_once("conexao.php");

    $emailadm = "admin@admin.com";
    $senhaadm = "adm123";
    
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        if(($_POST['email'] == $emailadm) && ($_POST['senha'] == $senhaadm)){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $adm = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
            $resultadm = mysqli_query($conn, $adm);
            $resultadoadm = mysqli_fetch_assoc($resultadm);

            if(empty($resultadoadm)){
                header("Location: vazio.php");
            }elseif(!empty($resultadoadm)){
                header("Location: log2.php");
            }else{
                header("Location: vazio.php");
            }
        }
        else{
            $email = $_POST['email'];
            $senha = $_POST['senha'];
   
            $sql = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $resultado = mysqli_fetch_assoc($result);

            if(empty($resultado)){
            $_SESSION['msg'] = "E-mail ou senha estão incorretos";
            header("Location: vazio.php");
                
            }elseif(!empty($resultado)){

            $_SESSION['usuarioId'] = $resultado['id'];
            header("Location: log.php");

            }
        }
        
    }
    else{
        $_SESSION['msg'] = "E-mail ou senha estão incorretos";
        header("Location: vazio.php");
    }
?>
<?php
    session_start();
    include_once("conexao.php");

    $emailadm = "admin@admin.com";
    $senhaadm = "adm123";

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $admin = "SELECT * FROM usuarios WHERE email = '$emailadm' && senha = '$senhaadm' LIMIT 1";
        $sql = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $resultadm = mysqli_query($conn, $admin);
        $result = mysqli_query($conn, $sql);
        $resultadoadm = mysqli_fetch_assoc($resultadm);
        $resultado = mysqli_fetch_assoc($result);

        if(!empty($resultadm)){
            header("Location:admin.php");
        }
        else if(empty($resultado)){
            $_SESSION['msg'] = "E-mail ou senha estão incorretos";
            header("Location: vazio.php");
        }elseif(!empty($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            header("Location: log.php");
        }
    }
    else{
        $_SESSION['msg'] = "E-mail ou senha estão incorretos";
        header("Location: vazio.php");
    }
?>
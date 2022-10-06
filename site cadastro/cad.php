<?php
session_start();

$_SESSION['msg'] = "Usuário cadastrado com sucesso";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "vascodagama";

//Conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result_usuario = "INSERT INTO user (nome, email, senha) VALUES ('$nome','$email','$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

echo "<br>o Nome e ".$nome;
echo "<br>o Email e ".$email;
echo "<br>a Senha e ".$senha;
?>
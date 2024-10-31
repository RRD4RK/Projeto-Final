<?php
include("sessao.php");
include("topo.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = mysqli_connect
('localhost','root','','salão_da_kelly');
$email = mysqli_real_escape_string($conexao, $_POST['email']);



    $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $executar = mysqli_query($conexao, $sql);

    header('location: login.php');


mysqli_close($conexao);
?>
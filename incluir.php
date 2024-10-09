<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect
('localhost','root','','salão_da_kelly');
$sql = "insert into cliente (nome, email, senha) values ('$nome', '$email', '$senha')";
echo $sql;
mysqli_query($conexao, $sql);
mysqli_close($conexao);
?>
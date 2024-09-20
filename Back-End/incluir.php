<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$conexao = mysqli_connect
('localhost','root','','salao');
$sql = "insert into clientes (nome, email, telefone, senha) values ('$nome', '$email', '$telefone', '$senha')";
echo $sql;
mysqli_query($conexao, $sql);
mysqli_close($conexao);
?>
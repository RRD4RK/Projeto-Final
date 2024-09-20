<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect
('localhost','root','','salao');
$sql = "select * from clientes where 
email like '$email' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['email']!=Null){
	$_SESSION['email'] = $res['email'];
	$_SESSION['senha'] = $res['senha'];
    echo "Logado com sucesso!";
	echo"<a href='logout.php'>sair</a>";
	//header('location:inicial.php');
}
else{
    echo "Login e/ou senha incorretos!
	<a href='pag_log.html'>Tentar Novamente</a>";
}
	
$fechar = mysqli_close($conexao);



?>
<?php
session_start();
include('topo.php');

$email = $_POST['email'];
$senha = $_POST["senha"];
$conexao = mysqli_connect
('localhost','root','','salão_da_kelly');
$sql = "select * from cliente where 
email like '$email' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['email']!=Null){
    echo "Logado com sucesso!";
        $_SESSION['email'] = $res['email'];
        $_SESSION['id'] = $res['id'];
        $_SESSION['adm'] = $res['adm'];
        header('location:inicial.php');
}
else{
    echo "Login e/ou senha incorretos!
	<a href='login.php'>Tentar Novamente</a>";
}
	
$fechar = mysqli_close($conexao);



?>


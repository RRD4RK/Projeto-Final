<?php
session_start();

if(isset($_POST['email'])&& isset($_POST['senha']))
$email = $_POST['email'];
$senha = $_POST["senha"];
$conexao = mysqli_connect
('localhost','root','','salão_da_kelly');
$sql = "select * from cliente where 
email like '$email' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['email']!=Null){
	$_SESSION['email'] = $res['email'];
	$_SESSION['senha'] = $res['senha'];
    echo "Logado com sucesso!";
	echo"<a href='logout.php'>sair</a>";
	header('location:tela-inicial.html');
}
else{
    echo "Login e/ou senha incorretos!
	<a href='pag_log.html'>Tentar Novamente</a>";
}
	
$fechar = mysqli_close($conexao);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <img src="img/logo_salao.png" id="imagem">
    <img src="img/Kelly_cabelo_log.jpeg" id="kelly">
    <p id="login">LOGIN</p>
        <form class="horario" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        
            <label for="password">Senha:</label>
            <input type="password" id="password" name="senha">

            <button type="submit" id="logar">Logar</button>
            <p class="n-tem-conta" id="maior">Não tem conta?</p>
            <a href="cadastrar.html"class="n-tem-conta" >Crie uma Aqui!</a>
        </form>
</body>
</html>
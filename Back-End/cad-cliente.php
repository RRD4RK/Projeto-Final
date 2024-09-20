<?php
$con = mysqli_connect('localhost', 'root', '', 'salao');
$sql = "select * from clientes order by nome asc";
$exe = mysqli_query($con, $sql);
?>

	<form action="incluir.php" method="post">
		Digite seu Nome <input name="nome" type="text"><br>
		Email <input type="text" name="email"><br>
		Telefone <input type="text" name="telefone"><br>
		Senha <input type="text" name="senha"><br>
		
	</select><br>
	<input type="submit">
	</form>
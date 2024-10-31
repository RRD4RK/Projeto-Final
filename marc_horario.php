<?php 
session_start();
include('sessao.php');
include('topo.php');
$con = mysqli_connect('localhost', 'root', '', 'salão_da_kelly');
$sql = "select * from servicos order by nome asc";
$exe = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="marc_horario.css">
</head>
<body>

        <img src="img/logo_salao.png" id="logo">
        <img src="img/3210465.jpg" id="fundo">
        <div id="form">
            <form id="formulario" action="form.php" method="POST">
                <label for="escolha">Escolha o serviço</label>
                <select name="servico" value="servico">
		    <?php
		        while($res = mysqli_fetch_array($exe)){
			        $id = $res['id'];
			        $nome = $res['nome'];
			        echo "<option value='$id'>$nome</option>";
		        }
		    ?>
		        </select><br>
                <label for="date">Horario</label>
                <input type="datetime-local" name="horario" id="horario" step="3600" required>

                
                <input type="submit" value="Enviar" id="botao">
                
            </form>
        </div>

</body>
</html>
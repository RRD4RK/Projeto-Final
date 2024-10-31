<?php
include('sessao.php');
$id = $_GET['id'];
$conexao = mysqli_connect('localhost','root','','salão_da_kelly');
$sql = "SELECT * FROM agendamentos WHERE id=$id";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>
    <form action="atualizar.php" method="post">
        Id  <input type="text" name="id"
        value="<?php echo $res['id'];?>" readonly><br>
        Serviço <input type="text" name="servico"
        value="<?php echo $res['servico'];?>"><br>
        Nome <input type="text" name="nome"
        value="<?php echo $res['nome'];?>"><br>
        Pagamento <input type="text" name="pagamento"
        value="<?php echo $res['pagamento'];?>"><br>
        horario <input type="datetime-local" name="horario"
        value="<?php echo $res['horario'];?>"><br><br>
        <input type="submit">
    </form>

<?php
include("sessao.php");
include("topo.php");
$conexao = mysqli_connect('localhost','root','','salão_da_kelly');
$sql = "SELECT * FROM agendamentos";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id</th><th>Serviço</th>
<th>Nome</th><th>Pagamento</th>
<th>Horario</th><th>Apagar</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
    $id = $resultado['id'];
    $servico = $resultado['servico'];
    $nome = $resultado['nome'];
    $horario = $resultado['horario'];
    $pagamento = $resultado['pagamento'];
    //$preco = $resultado['preco'];
    //$tipo_ingresso = $resultado['tipo_ingresso'];
    echo "<tr><td>$id</td><td>$servico</td><td>$nome</td>
    <td>$pagamento</td><td>$horario</td><td><a href='del_horario.php?id=$id'>Remover</a></td>
    <td><a href='atualizar_horario.php?id=$id'>Atualizar</a></td></tr>";
}
echo "</table>";
$fechar = mysqli_close($conexao);

/*echo"<style>
    table{
    margin-top:100px;
    margin: 25%;
    width:50%;
    }

    nav{
    background-color: black;
    width: 100%;
    height: 70px;
    border-bottom: 1px #D3B077 solid;
    position: fixed;
    }

</style>"*/
?>
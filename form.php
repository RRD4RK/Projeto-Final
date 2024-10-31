<?php
session_start();
include("sessao.php");
include("topo.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $conexao = mysqli_connect('localhost', 'root', '', 'salão_da_kelly');

    if(!$conexao){
        die("Conexão Falhou" . mysqli_connect_error());
    }
    
    $servico = $_POST['servico'];
    $id = $_SESSION['id'];
    $horario = $_REQUEST['horario'];
    
    $sql = "INSERT INTO agendamentos(servico, id, horario) VALUES ('$servico','$id','$horario')";
    $verifica = "SELECT horario from agendamentos where horario = $horario";
    if($verifica == null){
        echo "horario já esta agendado";
    }else{
        
        if (!empty($sql)) {
            if (mysqli_query($conexao, $sql)) {
                header('Refresh:2; url=horario-marcado.html');
            } else {
                echo "Erro ao realizar o agendamento: " . mysqli_error($conexao);
            }
        } else {
            echo "Consulta SQL está vazia!";
        }

        mysqli_close($conexao); 
    }
} else {
    echo "Método de requisição inválido!";
}
?>
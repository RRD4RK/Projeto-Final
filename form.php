<?php
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $conexao = mysqli_connect('localhost', 'root', '', 'salão_da_kelly');

    if(!$conexao){
        die("Conexão Falhou" . mysqli_connect_error());
    }
    
    $servico = $_REQUEST['escolha'];
    $nome = $_REQUEST['nome'];
    $horario = $_REQUEST['horario'];
    $pagamento = $_REQUEST['pagamento'];
    
    $sql = "INSERT INTO agendamentos(servico, nome, horario, pagamento) VALUES ('$servico', '$nome', '$horario', '$pagamento')";
    
    
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
} else {
    echo "Método de requisição inválido!";
}
?>
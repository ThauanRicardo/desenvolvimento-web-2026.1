<?php

$host = "localhost";
$user = "root";
$senha = "";
$banco = "atd2";

$conexao = mysqli_connect(
    $host,
    $user,
    $senha,
    $banco
);

if(!$conexao){
    die("Erro na conexão.");
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO inscricoes(nome,email,telefone)
VALUES('$nome','$email','$telefone')";

if(mysqli_query($conexao, $sql)){
    echo "<h2>Obrigado, $nome, sua inscrição foi enviada com sucesso!</h2>";
} else {
    echo "Erro ao salvar inscrição: " . mysqli_error($conexao);
}

?>
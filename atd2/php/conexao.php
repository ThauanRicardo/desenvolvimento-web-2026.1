<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "atd2";

$conexao = mysqli_connect($host, $user, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão.");
}
?>
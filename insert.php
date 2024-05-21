<?php
$nome = $_POST["nome"];
$setor = $_POST["setor"];
$login = $_POST["login"];
$senha = $_POST["senha"];

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$login','$setor','$senha')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";
?>
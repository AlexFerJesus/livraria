<?php
$nome = $_POST["nome"];
$endereco = $_POST["endereço"];
$nrendereco = $_POST["nrendereço"];
$CPF = $_POST["CPF"];
$CNPJ = $_POST["CNPJ"];
$telefone = $_POST["telefone"];

include 'conexao.php';

$insert_cli = "INSERT INTO tb_cliente VALUES (NULL,'$nome','$endereco','$nrendereco','$CPF','$CNPJ','$telefone')";

$query = mysqli_query($conexao, $insert_cli);

echo "Cliente inserido com Sucesso";
?>
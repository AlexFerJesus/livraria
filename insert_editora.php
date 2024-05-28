<?php
$nomeE = $_POST["nomeE"];
$endereçoE = $_POST["endereçoE"];
$nrendereçoE = $_POST["nrendereçoE"];
$bairroE = $_POST["bairroE"];
$telefoneE = $_POST["telefoneE"];
$gerente = $_POST["gerente"];

include 'conexao.php';

$insert_edi = "INSERT INTO tb_editora VALUES (NULL,'$nomeE','$endereçoE','$nrendereçoE','$bairroE','$telefoneE','$gerente')";

$query = mysqli_query($conexao, $insert_edi);

echo "Editora inserida com Sucesso";
?>
<?php

//recebendo dados do usuário
$nome = $_POST['login'];
$senha = $_POST['senha'];

//incluindo arquivos de conexão
include 'conexao.php';

//selecionando dados no banco de dados

$select = "SELECT * FROM tb_user  WHERE login = '$nome'";

$query = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($query);

$name_banco = $result['login'];
$senha_banco = $result['senha'];

if ($nome == $nome_banco && $senha == $senha_banco)
{
    header('location: C_cliente.html');

}
else
{
    echo "<script>alert('Usuário Invalido!!!'; history.back())</script>";
}

?>
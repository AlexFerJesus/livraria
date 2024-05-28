<?php
print_r($_POST);
$codigo = $_POST["id"];
$nome = $_POST["nome"];
$setor = $_POST["setor"];
$login = $_POST["login"];

include 'conexao.php';

$update = "UPDATE tb_user set
    nm_user = '$nome';
    setor = '$nm_setor';
    login = '$login';
    where = id_user = '$codigo'
";

$query = mysqli_query($conexao, $UPDATE);

echo "Sucesso";
?>
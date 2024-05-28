<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    include 'conexao.php';
    $codigo = $_GET['id'];
    $select = "SELECT * FROM tb_user where id_user = $codigo";
    $query = mysqli_query($conexao,$select);
    $result =  mysqli_fetch_array($query);

    print_r($result);
    ?>
    
    <div class="container-form text-center">
            <div class="flex">
                <form class="user" action="update_user.php" method="POST">
                    <input type="hidden" value="<?php $result['id']?>" name="id">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Nome</strong></label>
                        <input type="text" value="<?php echo $result['nm_usuario'];?>" class="form-control" id="exampleInputEmail1" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Setor</strong></label>
                        <input type="text" value="<?php echo $result['nm_setor'];?>" class="form-control" id="exampleInputEmail1" name="setor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Login</strong></label>
                        <input type="text" value="<?php echo $result['login'];?>" class="form-control" id="exampleInputEmail1" name="login">
                    </div>
                    
                    <div class="botao">
                        <button type="submit" class="btn btn-primary"><strong>atualizar</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
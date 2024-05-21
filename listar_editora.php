<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="fa-solid fa-book-open"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./C_cliente.html">Cad.Cliente</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./cadastro.html ">Cad.Editora</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./listar_cliente.php">Relat.Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./listar_editora.php">Relat.Editora</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./listar_user.php">Relat.Usuario</a>
              </li>
              
            </ul>
          </div>
        </div>
        </nav>
        <h2>Listar Editora</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Editora</th>
      <th scope="col">Endereço</th>
      <th scope="col">Numero do endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">Telefone</th>
      <th scope="col">Gerente</th>
    </tr>
  </thead>
  <tbody>
        <?php
    include 'conexao.php';
    $select = "SELECT * FROM tb_editora";
    $query = mysqli_query($conexao,$select);
    while ($result =  mysqli_fetch_array($query)) { ?>
<tr>
      <td scope="row"><?php echo $result['cd_editora']; ?></td>
      <td> <?php echo $result['nm_editora']; ?></td>
      <td><?php echo $result['nm_endereco']; ?></td>
      <td><?php echo $result['nr_endereco']; ?></td>
      <td><?php echo $result['nm_bairro']; ?></td>
      <td><?php echo $result['nr_telefone']; ?></td>
      <td><?php echo $result['nm_gerente']; ?></td>
    </tr>

<?php } ?>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
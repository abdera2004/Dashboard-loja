<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Adicionar pedido</title>
</head>
<?php
  include '../components/Margem/index.php';
?>
<body class="d-flex flex-row p-0 align-items-center justify-content-center ">
<table class="table border-bottom border-secondary-subtle text-center">
  <thead>
    <tr>
      <th scope="col" class="d-none">#</th>
      <th scope="col" class="d-none">#</th>
      <th scope="col" class="d-none">#</th>
      <th scope="col" class="col-4 fs-4">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle fs-4 fw-bold border-0 bg-transparent p-0" style="color: black;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          PRODUTO
        </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
      </th>
      <th scope="col" class="col-4 fs-4">QUANTIDADE</th>
      <th scope="col" class="col-4 fs-4">PREÇO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="d-none">1</td>
      <td scope="row" class="d-none">1</td>
      <td scope="row" class="d-none">1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</body>
<?php
  include '../components/Margem/index.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
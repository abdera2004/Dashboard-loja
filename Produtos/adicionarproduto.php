<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Adicionar cliente</title>
</head>
<?php
  include '../components/Margem/index.php';
?>
<body class="d-flex flex-row p-0 align-items-center justify-content-center ">
    <div class="px-2 py-3 border border-2 border-black rounded col d-flex align-items-center">
        <form class="container-fluid">
          <h2 class="w-100 mb-4">INSERIR PRODUTO</h2>
          <div class="w-100 d-inline-flex justify-content-between mb-5">
            <div class="mb-3 col me-5">
              <input type="text" class="form-control p-0 pb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
            </div>
            <div class="mb-3 col">
              <input type="number" class="form-control p-0 pb-1" id="exampleInputPassword1" placeholder="Preço (R$)">
            </div>
          </div>
          <div class="w-100 d-inline-flex justify-content-between mb-5">
            <div class="mb-3 col">
              <input type="number" class="form-control p-0 pb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estoque">
            </div>
          </div>
          <div class="w-100 d-inline-flex">
            <div class="form-floating col mb-5">
              <textarea class="form-control mt-2" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Descrição</label>
            </div>
          </div>
          <div class="w-100 d-inline-flex justify-content-between">
            <button type="submit" class="btn botao border border-1 border-black" style="background-color: #FF0000;"><a href="index.php" style="all: unset;">CANCELAR</a></button>
            <button type="submit" class="btn botao border border-1 border-black" style="background-color: #00FF00;">CADASTRAR</button>
          </div>
        </form>
    </div>
</body>
<?php
  include '../components/Margem/index.php';
?>
</html>
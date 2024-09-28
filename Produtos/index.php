<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Produtos</title>
</head>
<?php
    include '../components/Navbar/index.php';
?>
<body class="d-flex flex-row justify-content-center">
    <div class="d-flex flex-column col px-4 mt-3">
        <div class="col-12">
        <?php
            include '../components/Searchbar/index.php';
        ?>   
    <div class="d-flex col-12 justify-content-end">
        <div style="border-radius: 100%; height: 40px; width: 40px; background-color: #00C900; display: flex; justify-content: center; align-items: center;">
            <button
                style="all: unset;"
                data-bs-toggle="tooltip"
                data-bs-placement="right"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="Adicionar produto">
            
            <a href="adicionarproduto.php">
                <i class="bi bi-plus-lg"></i>
            </a>
           </button> 
        </div>
    </div>
    <table class="table border-bottom border-secondary-subtle text-center">
    <thead>
        <tr class="">
        <th scope="col" class="col-1 fs-4">ID</th>
        <th scope="col" class="col-2 fs-4">NOME</th>
        <th scope="col" class="col-3 fs-4">DESCRIÇÃO</th>
        <th scope="col" class="col-2 fs-4">PREÇO</th>
        <th scope="col" class="col-2 fs-4">ESTOQUE</th>
        <th scope="col" class="col-1 fs-4">EDITAR</th>
        <th scope="col" class="col-1 fs-4">EXCLUIR</th>
        </tr>
    </thead>
    <tbody style="font-size: 10px; font-weight: bold;">
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>oi</td>
            <td class="d-flex justify-content-center">
                <div style="border-radius: 100%; height: 40px; width: 40px; background-color: #C4C4C4; display: flex; justify-content: center; align-items: center;">
                    <button type="button" style="all: unset;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-pencil-square" style="font-size: 20px;"></i>    
                    </button>
                </div>
            </td>
            <td class="text-center">
                <div style="border-radius: 100%; height: 40px; width: 40px; background-color: #DA0000; display: inline-flex; justify-content: center; align-items: center;">
                    <button type="button" style="all: unset;" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <i class="bi bi-trash-fill" style="font-size: 20px;"></i>    
                    </button>
                </div>
            </td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
</body>
<?php
    include '../components/Margem/index.php';
?>

<!--Código para ativar tooltips-->
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<!-- Modal de editar-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Editar produto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="">
          <div class="w-100 d-inline-flex justify-content-between mb-5">
            <div class="mb-3 col me-5">
              <input type="text" class="form-control p-0 pb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
            </div>
            <div class="mb-3 col">
              <input type="number" class="form-control p-0 pb-1" id="exampleInputPassword1" placeholder="Preço (R$)" data-mask="0,00">
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
        </form>
      </div>
      <div class="modal-footer col-12 justify-content-between">
        <button type="button" class="btn botao border border-1 border-black" style="background-color: #FF0000;" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn botao border border-1 border-black" style="background-color: #00FF00;">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de excluir -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger d-flex flex-column">  
        <h1 class="modal-title fs-2 text-white" id="exampleModalLabel">Tem certeza que deseja excluir?</h1>
        <h1 class="modal-title fs-5 text-white">Esta ação é irreversível.</h1>
      </div>
      <div class="modal-body">
        <form class="">
            <h1 class="text-black fs-3 fw-bold">ID:</h1>
            <h1 class="text-black fs-3 fw-bold">Nome:</h1>
        </form>
      </div>
      <div class="modal-footer col-12 justify-content-between">
        <button type="button" class="btn botao border border-1 border-black" style="background-color: #FF0000;" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn botao border border-1 border-black" style="background-color: #00FF00;">Excluir</button>
      </div>
    </div>
  </div>
</div>
</html>
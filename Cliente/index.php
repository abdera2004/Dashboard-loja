<?php
require_once '../Dao/UsuariosDao.php';
require_once '../Model/Mensagem.php';
$users = UsuariosDao::selectAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Clientes</title>
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
        <div class="botao-hover3" style="border-radius: 100%; height: 40px; width: 40px; display: flex; justify-content: center; align-items: center;">
            <button
                class="w-100 h-100"
                style="all: unset; cursor: pointer;"
                data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="Adicionar cliente">
            <a href="adicionarcliente.php" class="d-flex w-100 h-100 justify-content-center align-items-center">
                <i class="bi bi-plus-lg text-white"></i>    
            </a>
           </button> 
        </div>
    </div>
    <table class="table border-bottom border-secondary-subtle text-center">
    <thead>
        <tr class="">
            <th scope="col" class="col-1 fs-4">ID</th>
            <th scope="col" class="col-2 fs-4">NOME</th>
            <th scope="col" class="col-2 fs-4">E-MAIL</th>
            <th scope="col" class="col-5 fs-4">DATA DE NASCIMENTO</th>
            <th scope="col" class="col-1 fs-4">EDITAR</th>
            <th scope="col" class="col-1 fs-4">EXCLUIR</th>
        </tr>
    </thead>
    <tbody style="font-size: 10px; font-weight: bold;">
        <?php foreach ($users as $User) : ?>
        <tr>
            <th scope="row"><?= $User['idUsuario']; ?></th>
            <td><?= $User['nomeUsuario']; ?></td>
            <td><?= $User['emailUsuario']; ?></td>
            <td><?= $User['dataNascUsuario']; ?></td>
            <td class="d-flex justify-content-center">
                <div class="botao-hover" style="border-radius: 100%; height: 40px; width: 40px; display: flex; justify-content: center; align-items: center;">
                <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $User['idUsuario']?>">
                    <button class="w-100 h-100" type="button" style="all: unset; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-pencil-square" style="font-size: 20px;"></i>    
                    </button>
                </div>
            </td>
            <td class="text-center">
                <div class="botao-hover2" style="border-radius: 100%; height: 40px; width: 40px; display: inline-flex; justify-content: center; align-items: center;">
                    <button class="w-100 h-100" type="submit" value="DELETE" name="acao" style="all: unset; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <i class="bi bi-trash-fill" style="font-size: 20px;"></i>    
                    </button>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
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
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Editar cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $User) : ?>
        <form action="process.php" method="POST">
            <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $User['idUsuario']?>">
            <div class="w-100 d-inline-flex justify-content-between mb-5">
                <div class="col me-5">
                    <input type="text" class="form-control p-0 pb-1" value="<?= $User['nomeUsuario']?>" aria-describedby="emailHelp" placeholder="Nome">
                </div>
                <div class="col">
                    <input type="email" class="form-control p-0 pb-1" value="<?= $User['emailUsuario']?>" placeholder="Email">
                </div>
            </div>
            <div class="w-100 d-inline-flex">
                <div class="col" style="">
                    <input type="date" class="form-control p-0 pb-1 fw-bold" value="<?= $User['dataNascUsuario']?>" aria-describedby="emailHelp">
                </div>
            </div>
        </form>
        <?php endforeach; ?>
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
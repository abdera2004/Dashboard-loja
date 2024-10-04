<?php
require_once '../Dao/UsuariosDao.php';
// Contar total de usuários cadastrados
$totalUsuarios = UsuariosDao::getTotalClientes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/inicio.css">
    <title>Inicio</title>
</head>
<?php
    include '../components/Navbar/index.php';
?>
<body class="d-flex flex-row container-fluid p-0">
    <div class="row mt-3 gap-2 d-flex justify-content-center align-items-center">
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Faturamento total</b>
            <b class="variavel-card fs-3">Faturamento total</b>
        </div>
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Total de clientes</b>
            <b class="variavel-card fs-3"><?php echo $totalUsuarios; ?> </b>
        </div>
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Pedidos a entregar </b>
            <b class="variavel-card fs-3">Faturamento total</b>
        </div>
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Pedidos a entregar </b>
            <b class="variavel-card fs-3">Faturamento total</b>
        </div>
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Pedidos a entregar </b>
            <b class="variavel-card fs-3">Faturamento total</b>
        </div>
        <div class="conteudo-card col-4 pt-2">
            <b class="text-white fs-5">Pedidos a entregar </b>
            <b class="variavel-card fs-3">Faturamento total</b>
        </div>        
    </div>
</body>
<?php
    include '../components/Margem/index.php';
?>
</html>
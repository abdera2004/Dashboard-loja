<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="vh-100 vw-100 d-flex justify-content-center align-items-center">
        <div class="col-8 div-principal border border-black border-3 rounded d-flex flex-row">
            <div class="primeira-metade col-6 d-flex justify-content-center align-items-center flex-column">
                <h3 class="fw-bold text-black mb-5">Login</h3>
                <form>
                    <div class="d-flex flex-column row-gap-5">
                        <input type="text" class="input input-group" placeholder="E-mail">
                        <input type="text" class="input input-group" placeholder="Senha">
                    </div>
                    <div class="form-check mt-5 mb-5">
                        <input type="radio" class="form-check-input rounded">
                        <b class="text-black">Lembre-se de mim</b>
                    </div>
                    <button type="submit" class="btn botao col-12 text-white fw-bold fs-3 rounded-4"><a style="all: unset;" href="../Home/index.php">Entrar</a></button>
            </div>
            <div class="segunda-metade col-6 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="../img/logo.png">
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
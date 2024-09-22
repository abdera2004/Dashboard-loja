<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perfil adm</title>
</head>
<body class="d-flex flex-column justify-content-center bg-white px-3">
    <div class="w-100 mt-1 mb-5 d-flex justify-content-center">
        <h1 style="color: black; font-weight: bold;">Editar perfil</h1>
    </div>
    <form>
        <div class="w-100 d-flex justify-content-center">
            <label for="foto" id="lbFoto" class="d-flex justify-content-center flex-column align-items-center">
                <h1 class="fs-3 text-black fw-bold">Alterar imagem</h1>
                <img id="imgPreview" src="../img/imgpreview.png" style="object-fit: cover; border-radius: 50%;">
            </label>
            <input type="file" id="foto" name="fotoAdm" accept="image/*" onchange="previewImagem(event)" style="display: none;">
        </div>
        <div class="w-100 d-flex flex-row gap-4 mt-2">
            <div class="input-group col mb-4" style="height: 70px;">
                <input type="text" class="form-control fs-3 fw-bold bg-secondary" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col mb-4" style="height: 70px;">
                <input type="text" class="form-control fs-3 fw-bold bg-secondary" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="w-100 d-flex flex-row gap-4 mb-5">
            <div class="input-group col mb-5" style="height: 70px;">
                <input type="text" class="form-control fs-3 fw-bold bg-secondary" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col mb-5" style="height: 70px;">
                <input type="text" class="form-control fs-3 fw-bold bg-secondary" placeholder="Confirmar senha" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="w-100 d-inline-flex justify-content-between">
            <button type="submit" class="btn botao border border-1 border-black" style="background-color: #FF0000;"><a href="../Home/index.php" style="all: unset;">CANCELAR</a></button>
            <button type="submit" class="btn botao border border-1 border-black" style="background-color: #00FF00;">CONFIRMAR</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
function previewImagem(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function(){
        var imgElement = document.getElementById('imgPreview');
        imgElement.src = reader.result;
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
</html>
<style>
.botao {
    width: 200px;
    height: 60px;
    border-radius: 15px;
    font-size: 25px;
    color: white;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
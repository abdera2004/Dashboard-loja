<div class="container" style="width: 620px; height: 48px;">
    <form class="d-flex align-items-center position-relative" role="search">
        <div class="d-flex justify-content-center align-items-center row-2" style="">
            <i class="position-absolute bi bi-search" style="left: 4px; font-size: 18px; cursor: default;"></i>
        </div>
        <input class="form-control rounded-pill border border-black ps-4" type="search" placeholder="Pesquisar..." aria-label="Search" style="height: 100%; padding-left: 40px;">
    </form>
</div>

<style>
    /* Estilo do placeholder */
    ::-webkit-input-placeholder {
        opacity: 0.5;
        color: grey;
    }
    input::placeholder {
        opacity: 0.5;
        color: grey;
        font-size: 20px;
    }

    /* Ajustes de padding e altura do input */
    input.form-control {
        padding-left: 40px; /* Espaço para o ícone */
        height: 100%;
    }

    /* Centralizar o ícone verticalmente */
    i.bi-search {
        top: 50%;
        transform: translateY(-50%);
        color: black;
    }

    input {
        letter-spacing: 0.5px;
    }
</style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        .corpo {
            position: fixed;
            top: 0;
            left: 0;
            width: 230px; /* Largura da barra de navegação */
            height: 100vh;
            background-color: #10890E;
            overflow-y: auto;
            box-shadow: 5px 0 5px 8px rgba(0, 0, 0, 1);
        }

        .conteudo-principal {
            margin-right: 300px; /* Mesma largura da barra de navegação */
            width: calc(100% - 300px); /* Ajuste o tamanho do conteúdo para ocupar o espaço restante */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logo {
            width: 300px;
            height: 126px;
        }

        .tamanho-menu {
            height: 100px;
            width: 300px;
            color: white;
        }

        i:hover {
            transition: 0.5s;
            color: #c4c4c4;
            cursor: pointer;
        }

        a {
            color: white;
            all: unset; /* Remove underline from links */
            font-weight: bold;
            cursor: pointer;
        }

        a:hover {
            transition: 0.5s;
            color: #c4c4c4;
            cursor: pointer;
        }

        .dropdown-toggle::after {
            display: none; /* Remove the default dropdown arrow */
        }

        .bi {
            color: white;
        }

        .bi-plus-lg:hover {
            color: black;
        }

        .bi-pencil-square:hover {
            color: black
        }

        .bi-trash-fill:hover {
            color: black;
        }
        
    </style>
    <!-- Barra de Navegação -->
    <div class="corpo col-2 d-flex flex-column align-items-start position-relative" style="height: 100vh; overflow: hidden;">
        <!-- Logo Section -->
        <div class="logo d-flex flex-column w-100 align-items-center justify-content-center mb-4 position-relative">
            <a href="../Home/index.php">
                <i class="bi bi-shop" style="font-size: 100px; color: white;"></i>
            </a>
        </div>

        <!-- Menu Items -->
        <div class="d-flex flex-column align-items-center w-100 ms-5">
            <div class="tamanho-menu d-flex flex-row align-items-center justify-content-start w-100 ">
                <a href="../Cliente/index.php">
                    <i class="bi bi-person-fill" style="font-size: 40px;"></i>
                    <b class="ps-2 texto-menu">Clientes</b>
                </a>
            </div>
            <div class="tamanho-menu d-flex flex-row align-items-center justify-content-start w-100 ">
                <a href="../Produtos/index.php">
                    <i class="bi bi-archive-fill" style="font-size: 40px;"></i>
                    <b class="ps-2 texto-menu">Produtos</b>
                </a>
            </div>
            <div class="tamanho-menu d-flex flex-row align-items-center justify-content-start w-100 ">
                <a href="../Pedidos/index.php">
                    <i class="bi bi-folder-symlink-fill" style="font-size: 40px;"></i>
                    <b class="ps-2 texto-menu">Pedidos</b>
                </a>
            </div>
        </div>

        <!-- Dropdown Section -->
        <div class="mt-auto w-100 d-flex justify-content-center">
            <div class="dropdown">
                <button class="dropdown-toggle bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle" style="font-size: 100px; color: white;"></i>
                </button>
                <ul class="dropdown-menu rounded border border-black">
                    <li><a class="dropdown-item fw-bold" href="../Adm/index.php">Perfil</a></li>
                    <li><a class="dropdown-item fw-bold" href="../Login/index.php">Fazer logoff</a></li>
                </ul>
            </div>
        </div>
    </div>
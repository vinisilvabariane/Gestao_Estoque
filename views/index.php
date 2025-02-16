<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" href="/GestaoEstoque/assets/imgs/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/GestaoEstoque/public/css/morph.css">
    <link rel="stylesheet" href="/GestaoEstoque/public/css/style.css">
    <style>
        .wave-animation {
            width: 100%;
            height: 50px;
            margin-top: 20px;
            overflow: hidden;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 text-dark" style="background-color: #d9e3f1;" id="theme">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand GestaoEstoque-gradient" href="/GestaoEstoque/index.php">GestaoEstoque</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#funcionalidadesModal">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#sobreModal">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container-fluid d-flex align-items-center justify-content-center" id="mainContent">
        <div class="d-flex justify-content-center align-items-center text-center flex-column">
            <div class="d-flex flex-wrap justify-content-center mt-5">
                <button class="btn btn-white btn-square d-flex flex-column align-items-center justify-content-center"
                    style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)';"
                    onclick="window.location.href='/GestaoEstoque/views/entrada.php'">
                    <i class="fas fa-sign-in-alt fa-2x"></i>
                    <span>Entrada</span>
                </button>
                <button class="btn btn-white btn-square d-flex flex-column align-items-center justify-content-center"
                    style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)';"
                    onclick="window.location.href='/GestaoEstoque/views/saida.php'">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                    <span>Saída</span>
                </button>
                <button class="btn btn-white btn-square d-flex flex-column align-items-center justify-content-center"
                    style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)';"
                    onclick="window.location.href='/GestaoEstoque/views/dashboard.php'">
                    <i class="fas fa-chart-line fa-2x"></i>
                    <span>Dashboard</span>
                </button>
                <button class="btn btn-white btn-square d-flex flex-column align-items-center justify-content-center"
                    style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)';"
                    onclick="window.location.href='/GestaoEstoque/views/cliente.php'">
                    <i class="fas fa-users fa-2x"></i>
                    <span>Clientes</span>
                </button>
                <button class="btn btn-white btn-square d-flex flex-column align-items-center justify-content-center"
                    style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)';"
                    onclick="window.location.href='/GestaoEstoque/views/estoque.php'">
                    <i class="fas fa-boxes fa-2x"></i>
                    <span>Estoque</span>
                </button>
            </div>
            <svg viewBox="0 0 100 10" preserveAspectRatio="none" class="wave-animation">
                <defs>
                    <linearGradient id="wave-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color: #007BFF; stop-opacity: 1" />
                        <stop offset="100%" style="stop-color: #800080; stop-opacity: 1" />
                    </linearGradient>
                </defs>
                <path d="M 0,5 Q 25,10 50,5 T 100,5" stroke="url(#wave-gradient)" stroke-width="0.5" fill="transparent"
                    stroke-dasharray="10 10">
                    <animate attributeName="stroke-dashoffset" from="0" to="20" dur="2s" repeatCount="indefinite" />
                </path>
            </svg>
        </div>
    </main>

    <footer class="text-center py-1 mt-auto text-dark" id="footer">
        <p>&copy; Todos os direitos reservados.</p>
    </footer>

    <!-- Modal Funcionalidades -->
    <div class="modal fade" id="funcionalidadesModal" tabindex="-1" aria-labelledby="funcionalidadesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="funcionalidadesModalLabel">Funcionalidades</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Aqui você pode ver as funcionalidades principais do sistema. (Adicione o conteúdo específico sobre
                    funcionalidades)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sobre -->
    <div class="modal fade" id="sobreModal" tabindex="-1" aria-labelledby="sobreModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sobreModalLabel">Sobre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Aqui você pode adicionar informações sobre o sistema e a empresa. (Adicione o conteúdo sobre a
                    empresa e sistema)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>
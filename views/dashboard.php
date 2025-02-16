<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
        #mainContent {
            width: 40%;
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>

<body style="background-color: #d9e3f1; display: flex; flex-direction: column; min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand GestaoEstoque-gradient" href="/GestaoEstoque/index.php">GestaoEstoque</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/entrada.php">Entrada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/saida.php">Saida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/estoque.php">Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GestaoEstoque/views/cliente.php">Cliente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="mainContent" class="py-5">
        <div class="row">

            <!-- Painel de Vendas -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Vendas Hoje</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">R$ 2,500,00</h3>
                    </div>
                </div>
            </div>

            <!-- Painel de Estoque -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-warning text-white">
                        <h5 class="card-title">Estoque Atual</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">150 Itens</h3>
                    </div>
                </div>
            </div>

            <!-- Painel de Alerta -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h5 class="card-title">Estoque Baixo</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">15 Itens</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Vendas Mensais -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title">Gráfico de Vendas Mensais</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Estoque -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Gráfico de Estoque</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="stockChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-1 mt-auto text-dark" id="footer">
        <p>&copy; Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/GestaoEstoque/public/js/graficos.js"></script>
</body>

</html>
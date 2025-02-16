<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrada</title>
    <link rel="icon" href="/GestaoEstoque/assets/imgs/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/GestaoEstoque/public/css/morph.css">
    <link rel="stylesheet" href="/GestaoEstoque/public/css/style.css">
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

    <main class="container-fluid d-flex align-items-center justify-content-center" id="mainContent"
        style="margin-bottom: 50px;">
        <form style="width: 800px;">
            <fieldset>
                <div>
                    <label for="codigo" class="form-label mt-4">Código do Produto</label>
                    <input class="form-control" type="text" id="codigo" name="codigo" required>
                </div>
                <div>
                    <label for="matricula" class="form-label mt-4">Matrícula</label>
                    <input class="form-control" type="text" id="matricula" name="matricula" required>
                </div>
                <div>
                    <label for="descricao" class="form-label mt-4">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                </div>
                <div>
                    <label for="destino" class="form-label mt-4">Destino</label>
                    <input class="form-control" type="text" id="destino" name="destino" required>
                </div>
                <div>
                    <label for="qtd_entrada" class="form-label mt-4">Quantidade de Entrada</label>
                    <input class="form-control" type="number" id="qtd_entrada" name="qtd_entrada" required>
                </div>
                <div>
                    <label for="data_entrada" class="form-label mt-4">Data de Entrada</label>
                    <input class="form-control" type="datetime-local" id="data_entrada" name="data_entrada" required>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Registrar Entrada</button>
                </div>
            </fieldset>
        </form>
    </main>

    <footer class="text-center py-1 mt-auto text-dark" id="footer">
        <p>&copy; Todos os direitos reservados.</p>
    </footer>
</body>

</html>
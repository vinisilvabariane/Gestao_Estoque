<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="/GestaoEstoque/public/css/morph.css">
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0-alpha1/dist/morph/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/GestaoEstoque/assets/imgs/icon.png" type="image/png">
    <style>
        .container-centralizado {
            min-height: 80vh;
            border-radius: 30px;
            overflow: hidden;
            background-color: #fff;
        }

        .col-direita {
            background: rgba(0, 80, 220, 0.6);
            backdrop-filter: blur(15px);
            border-radius: 30px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .col-esquerda {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 30px;
        }

        .img-fluid {
            border: none;
            border-radius: 0;
            position: relative;
            z-index: 2;
        }

        .svg-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            animation: animateSvg 5s infinite linear;
        }

        @keyframes animateSvg {
            0% {
                transform: scale(1) translateY(0);
            }
            50% {
                transform: scale(1.1) translateY(-10px);
            }
            100% {
                transform: scale(1) translateY(0);
            }
        }
    </style>
</head>

<body style="background-color: #d9e3f1;">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row w-75 shadow container-centralizado">
            <div class="col-md-7 p-5 d-flex flex-column justify-content-center bg-white col-esquerda">
                <h1 class="mb-4">Bem-vindo ao Sistema!</h1>
                <a href="/GestaoEstoque/views/" class="btn btn-primary">Ir para a Página</a>
            </div>
            <div class="col-md-5 text-white col-direita">
                <svg class="svg-background" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 200"
                    preserveAspectRatio="none">
                    <path d="M0,150 C200,100 400,100 600,150 C800,200 1000,200 1200,150" fill="none" stroke="#6b9ac4"
                        stroke-width="4" />
                    <path d="M0,130 C200,80 400,80 600,130 C800,170 1000,170 1200,130" fill="none" stroke="#5c85b1"
                        stroke-width="3" opacity="0.8" />
                    <path d="M0,140 C200,120 400,120 600,140 C800,160 1000,160 1200,140" fill="none" stroke="#92b4e3"
                        stroke-width="2.5" opacity="0.6" />
                </svg>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

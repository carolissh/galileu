<!doctype html>
<html lang="en" class="h-100">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #E9E9E9;
            /* Fundo cinza claro */
        }

        .form-container {
            background-color: #A8D5BA;
            /* Verde claro */
            border-radius: 5px;
            padding: 3rem;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .seta {
            position: fixed;
        }

        .link {
            text-decoration: none;
            font-size: 2rem;
        }

        .alert {
            background-color: #FFCCCC;
            /* Cor de fundo da alerta */
            border-color: #FF0000;
            /* Cor da borda */
        }

        .btn-primary {
            background-color: #4CAF50;
            /* Verde escuro para o botão */
            border-color: #4CAF50;
            /* Borda do botão */
        }

        .btn-primary:hover {
            background-color: #45A049;
            /* Verde mais escuro ao passar o mouse */
        }
    </style>
</head>

<body class="h-100">
    <header>
        <a href="index.php" class="link">
            <div class="seta mx-3 mt-2">
                <i class="bi bi-chevron-left"></i>
            </div>
        </a>
    </header>
    <main class="h-100 d-flex justify-content-center align-items-center">

        <div class="form-container col-md-3 ">
            <form method="post" action="./src/controller/loginController.php">
                <h1 class="text-center mb-4 display-4">Login</h1>
                <div class="mb-3 input-group-lg">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu email aqui" required />
                </div>
                <div class="mb-3 input-group-lg">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira sua senha aqui" required />
                </div>
                <div class="mb-3 input-group-lg">
                    <input name="entrar" id="entrar" class="btn btn-primary mb-3 w-100" type="submit" value="Entrar" />
                </div>
                <div class="d-flex justify-content-center">
                    <a href="cadastro.php" class="text-center">Não tenho cadastro</a>
                </div>
            </form>
        </div>

        <?php
        if (isset($_REQUEST['cod'])) {
            switch ($_REQUEST['cod']) {
                case 409:
                    echo '<div class="cont container alert alert-danger mt-3"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Usuário ou senha incorreta!</span></div>';
                    break;
                case 405:
                    echo '<div class="cont container alert alert-danger mt-3"><strong class="text-danger"> Você precisa estar logado!</strong><span class="text-danger"> Usuário ou senha incorreta!</span></div>';
                    break;
            }
        }
        ?>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
    require_once './src/controller/autenticationController.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Paciente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <!-- Custom CSS for hover effect -->
    <style>
        .btn-large {
            font-size: 1.5rem;
            padding: 1rem 2rem;
            transition: transform 0.3s ease;
            width: 100%;
        }

        .btn-large:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="./src/controller/logoutController.php" aria-current="page">Logout</a>
        </nav>
    </header>

    <main>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="row w-100">
                <div class="col d-flex justify-content-center">
                    <a href="agendar.php" class="btn btn-success btn-large">Agendar</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="resultados.php" class="btn btn-success btn-large">Resultados</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="cancelar.php" class="btn btn-success btn-large">Cancelar Agendamento</a>
                </div>
            </div>
        </div>
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

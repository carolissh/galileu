<?php
require_once './src/controller/autenticationController.php';
require_once './src/controller/usuariosController.php';

// Carrega a lista de médicos do banco de dados
$medicos = doctorsLoadAll();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Paciente</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="./src/controller/logoutController.php" aria-current="page">Logout</a>
        </nav>
    </header>

    <main>
        <form action="./src/controller/agendamentosController.php" method="post">
            <div class="mb-3">
                <label for="date" class="form-label">Data e horário</label>
                <input type="datetime-local" class="form-control" name="date" id="date" />
            </div>

            <div class="mb-3">
                <input type="checkbox" name="informar_medico" value="1" id="informar-medico" onchange="toggleMedicoSelect()" />
                <label for="informar-medico" class="form-label">Deseja informar um médico?</label>
            </div>

            <div class="mb-3" id="medico-select" style="display: none;">
                <label for="medico" class="form-label">Escolha o médico</label>
                <select class="form-select" name="medico" id="medico">
                    <?php foreach ($medicos as $key => $value): ?>
                        <option value="<?php echo $key; ?>"><?php echo $value['nome']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <form action="" method="post">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="hemogramaC" id="hemogramaC" />
                    <label class="form-check-label" for="hemogramaC">Hemograma Completo</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="glicemia" id="glicemia" />
                    <label class="form-check-label" for="glicemia">Glicemia em Jejum</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="colesterol" id="colesterol" />
                    <label class="form-check-label" for="colesterol">Colesterol Total e Frações</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="funcao_hepatica" id="funcao_hepatica" />
                    <label class="form-check-label" for="funcao_hepatica">Função Hepática (TGO, TGP, Bilirrubinas)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="exame_urina" id="exame_urina" />
                    <label class="form-check-label" for="exame_urina">Exame de Urina (EAS)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="teste_coagulacao" id="teste_coagulacao" />
                    <label class="form-check-label" for="teste_coagulacao">Teste de Coagulação (TP, TTPA)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="exame_feze" id="exame_feze" />
                    <label class="form-check-label" for="exame_feze">Exame de Fezes (Coprocultura)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="dosagem_hormonal" id="dosagem_hormonal" />
                    <label class="form-check-label" for="dosagem_hormonal">Dosagem de Hormônios (TSH, T3, T4)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="anticorpos" id="anticorpos" />
                    <label class="form-check-label" for="anticorpos">Anticorpos Antinucleares (FAN)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exames[]" value="dosagem_vitaminaD" id="dosagem_vitaminaD" />
                    <label class="form-check-label" for="dosagem_vitaminaD">Dosagem de Vitamina D</label>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

            
    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <script>
        function toggleMedicoSelect() {
            const checkbox = document.getElementById('informar-medico');
            const medicoSelect = document.getElementById('medico-select');
            medicoSelect.style.display = checkbox.checked ? 'block' : 'none';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
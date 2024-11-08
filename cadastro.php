<!doctype html>
<html lang="en">
<head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <style>
        .custom-container {
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com 80% de opacidade */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra */
            border-radius: 10px; /* Bordas arredondadas */
            padding: 20px; /* Espaçamento interno */
            margin-top: 50px; /* Margem superior para afastar do topo */
        }
        .conditional-fields {
            display: none; /* Inicialmente oculto */
        }
    </style>
</head>

<body>
    <main>
        <form method="post" action="./src/controller/cadastroController.php">
            <div class="container custom-container">
                <h2 class="text-center mb-4">Cadastro</h2>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nome"
                        id="nome"
                        placeholder="Digite seu nome"
                    />
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cpf"
                        id="cpf"
                        placeholder="Digite seu CPF"
                    />
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input
                        type="text"
                        class="form-control"
                        name="endereco"
                        id="endereco"
                        placeholder="Digite seu endereço"
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Digite seu email"
                    />
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input
                        type="text"
                        class="form-control"
                        name="telefone"
                        id="telefone"
                        placeholder="Digite seu telefone"
                    />
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select
                        class="form-select"
                        name="categoria"
                        id="categoria"
                        onchange="showConditionalFields()"
                    >
                        <option selected>Selecione a categoria</option>
                        <option value="1">Médico</option>
                        <option value="2">Biomédico</option>
                        <option value="3">Paciente</option>
                        <option value="4">Secretário</option>
                    </select>
                </div>

                <!-- Campos Condicionais -->
                <div id="medico" class="conditional-fields mb-3">
                    <label for="crm" class="form-label">CRM</label>
                    <input
                        type="text"
                        class="form-control"
                        name="crm"
                        id="crm"
                        placeholder="Digite seu CRM"
                    />
                </div>
                <div id="biomedico" class="conditional-fields mb-3">
                    <label for="crbm" class="form-label">CRBM</label>
                    <input
                        type="text"
                        class="form-control"
                        name="crbm"
                        id="crbm"
                        placeholder="Digite seu CRBM"
                    />
                </div>
                <div id="paciente" class="conditional-fields mb-3">
                    <label for="doencas" class="form-label">Doenças Existentes</label>
                    <input
                        type="text"
                        class="form-control"
                        name="doencas"
                        id="doencas"
                        placeholder="Digite suas doenças existentes"
                    />
                </div>
                <div id="secretario" class="conditional-fields mb-3">
                    <label for="formacao" class="form-label">Formação</label>
                    <input
                        type="text"
                        class="form-control"
                        name="formacao"
                        id="formacao"
                        placeholder="Digite sua formação"
                    />
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input
                        type="password"
                        class="form-control"
                        name="senha"
                        id="senha"
                        placeholder="Digite sua senha"
                    />
                </div>
                <div class="mb-3 text-center">
                    <input
                        name="cadastrar"
                        class="btn btn-success"
                        type="submit"
                        value="Cadastrar"
                    />
                </div>
            </div>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <script>
        function showConditionalFields() {
            const categoria = document.getElementById('categoria').value;
            const fields = {
                1: 'medico',
                2: 'biomedico',
                3: 'paciente',
                4: 'secretario'
            };

            // Esconde todos os campos condicionais
            document.querySelectorAll('.conditional-fields').forEach(field => {
                field.style.display = 'none';
            });

            // Exibe o campo correspondente
            if (fields[categoria]) {
                document.getElementById(fields[categoria]).style.display = 'block';
            }
        }
    </script>
</body>
</html>

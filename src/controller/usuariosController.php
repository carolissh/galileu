<?php
include_once __DIR__ . '/../model/ConexaoMysql.php';

function usersLogin($email, $senha) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'SELECT * FROM usuarios WHERE email="' . $email . '" AND senha="' . $senha . '"';
    $result = $con->Consultar($sql);
    @session_start();
    foreach ($result as $value) {
        $_SESSION['categoria'] = $value['categoria'];
    }
    $con->Desconectar();
    
    return $result->num_rows; // Retorna o número de registros selecionados
}

function usersLoadAll() {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'SELECT * FROM usuarios';
    $result = $con->Consultar($sql);
    $con->Desconectar();
    
    return $result;
}

function doctorsLoadAll() {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'SELECT * FROM usuarios WHERE categoria=1';
    $medicos = $con->Consultar($sql);
    $con->Desconectar();
    
    return $medicos;
}

function usersInsert($nome, $cpf, $endereco, $email, $telefone, $categoria, $senha) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO usuarios (nome, cpf, endereco, email, telefone, categoria, senha) VALUES ("' . $nome . '", "' . $cpf . '", "' . $endereco . '", "' . $email . '", "' . $telefone . '", "' . $categoria . '", "' . $senha . '")';
    $con->Executar($sql);
    $con->Desconectar();
    
    return true;
}

function selectUsersId($email) {
    $host = 'localhost';
    $usuario = 'root';
    $password = '12345';
    $database = 'clinica';
    $mysqli = new mysqli($host, $usuario, $password, $database);
    
    $result = null;
    if (mysqli_connect_errno()) {
        echo 'Erro ao realizar a conexão com o banco';
    } else {
        $query = 'SELECT * FROM usuarios WHERE email ="' . $email . '"';
        $result = $mysqli->query($query);
        foreach ($result as $value) {
            $idUsuario = $value['idUsuario'];
            
        
        }
    }
    
    $mysqli->close();
    return $idUsuario;
}

function doctorsInsert($crm, $id) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO medicos (crm, idUsuario) VALUES ("' . $crm . '", "' . $id . '")';
    $con->Executar($sql);
    return $con->total; // Retorne o ID correto
}

function biomedInsert($crbm, $id) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO biomedicos (crbm, idUsuario) VALUES ("' . $crbm . '", "' . $id . '")';
    $con->Executar($sql);
    return $con->total; // Retorne o ID correto
}

function patientsInsert($doencasExistentes, $id) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO pacientes (doencasExistentes, idUsuario) VALUES ("' . $doencasExistentes . '", "' . $id . '")';
    $con->Executar($sql);
    return $con->total; // Retorne o ID correto
}

function secretariosInsert($formacao, $id) {
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO secretarios (formacao, idUsuario) VALUES ("' . $formacao . '", "' . $id . '")';
    $con->Executar($sql);
    return $con->total; // Retorne o ID correto
}

function agendamentos($data, $array_exames, $idPaciente, $idMedico, $idSecretario) { 
    $con = new ConexaoMysql();
    $con->Conectar();
    $sql = 'INSERT INTO agendamentos (dataAgendamento, tipoExame, idPaciente, idMedico, idSecretario) 
            VALUES ("' . $data . '", "' . $array_exames . '", "' . $idPaciente . '", "' . $idMedico . '", "' . $idSecretario . '")';
    echo $sql;
    $con->Executar($sql);  // Executa o INSERT na tabela agendamentos
    $con -> Desconectar();

    $con2 = new ConexaoMysql();
    $con2 -> Conectar();
    
    // Agora, em vez de fazer um SELECT separado, você pode acessar o insert_id diretamente
    $sql2 = 'SELECT id FROM agendamentos ORDER BY id desc LIMIT 1';  // Retorna o último ID inserido usando mysqli  // Aqui você pega o ID do último inserido
    $idAgendamento = $con2 -> Executar($sql2);
    echo $idAgendamento;


    $con->Desconectar();

      // Retorna o ID do agendamento
}

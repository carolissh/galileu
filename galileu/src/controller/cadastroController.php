<?php

include_once '../controller/usuariosController.php';
if ($_POST) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $categoria = $_POST['categoria'];
    $senha = $_POST['senha'];

    $insert = usersInsert($nome, $cpf, $endereco, $email, $telefone, $categoria, $senha);
    
    if ($insert) {
        $idUsuario = selectUsersId($email);
        @session_start();
        $_SESSION['login'] = $email;
        $_SESSION['categoria'] = $categoria;

        switch ($categoria) {
            case 1:
                $crm = $_POST['crm'];
                doctorsInsert($crm, $idUsuario);
                header('Location: /medico.php');
                exit();
            case 2:
                $crbm = $_POST['crbm'];
                biomedInsert($crbm, $idUsuario);
                header('Location: /biomedico.php');
                exit();
            case 3:
                $doencasExistentes = $_POST['doencasExistentes'];
                patientsInsert($doencasExistentes, $idUsuario);
                header('Location: /paciente.php');
                exit();
            case 4:
                $formacao = $_POST['formacao'];
                secretariosInsert($formacao, $idUsuario);
                header('Location: /secretario.php');
                exit();
            default:
                header('Location: /index.php?cod=409');
                exit();
        }
    } else {
        // Handle the case where user insertion failed
        header('Location: /index.php?cod=500');
        exit();
    }
}

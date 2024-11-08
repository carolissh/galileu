<?php
include_once '../controller/usuariosController.php';
if ($_POST) {

    @session_start();

    if (isset($_POST['date'])) {
        $data = $_POST['date'];
    }

    if (isset($_POST['medico'])) {
        $idMedico = $_POST['medico'];
    } else if(!isset($_POST['medico'])){
        $idMedico = 0;
    }

    if (isset($_POST['exames'])) {
        $exames = $_POST['exames'];
    } else {
        $exames = [];
    }

    if (!empty($exames)) {
        foreach ($exames as $exame) {
            echo "Exame selecionado: " . $exame . "<br>";
        }
    } else {
        echo "Nenhum exame selecionado.<br>";
    }

    

    if ($_SESSION['categoria'] == 3){
        $email = $_SESSION['login'];
        $idPaciente = selectUsersId($email);
        $idSecretario = 0;
        $array_exames = implode(", ",  $exames);
        $idAgendamento = agendamentos($data, $array_exames, $idPaciente, $idMedico, $idSecretario); 
    }

    
}

?>

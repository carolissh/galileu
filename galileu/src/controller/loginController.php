<?php
    if($_POST) {
        require_once './usuariosController.php';


        $email = $_POST['email'];
        $senha = $_POST['senha'];

        
            if(usersLogin($email,$senha)>0){ 
                @session_start();
                $_SESSION['login'] = $email;
                if($_SESSION['categoria'] == 1){
                    header('location:\medico.php');
                }
                
                else if($_SESSION['categoria'] == 2){
                    header('location:\biomedico.php');
                }
                
                else if($_SESSION['categoria'] == 3){
                    header('location:\paciente.php');
                }

                else if($_SESSION['categoria'] == 4){
                    header('location:\secretario.php');
                }

                
                exit();
            }
            else{
                header('location:\index.php?cod=409');
            }
        }
        
    
?>
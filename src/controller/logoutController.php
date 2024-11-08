<?php
@session_start();

unset($_SESSION['login']);
unset($_SESSION['cadastro']);


header('location:../../index.php');
?>
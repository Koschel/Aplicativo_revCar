<?php
session_start();

    if((isset($_POST['email'])) && (isset($_POST['password']))){
    
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos";
        header("Location: ../index.php");
    }
?>
<?php
    session_start();

    if((isset($_POST['email'])) && (isset($_POST['password']))){
        $user = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if(($password == "123") && ($user == "teste@teste")){
            header("Location: ../model/administracaoIndex.php");    
        } else{
            $_SESSION['loginErro'] = "Usuário ou senha inválidos";
            header("Location: ../index.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos1";
        header("Location: ../index.php");
    }
?>
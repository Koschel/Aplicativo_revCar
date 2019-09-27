<?php
    session_start();

    if((isset($_POST['email'])) && (isset($_POST['password']))){
        $user = $_POST['email'];
        $password = $_POST['password'];

      // var_dump($user);
      // var_dump($password);
      // die();
        
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
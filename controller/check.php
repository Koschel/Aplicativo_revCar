<?php
    session_start();
    include('../controller/conexao.php');

    if((isset($_POST['email'])) && (isset($_POST['password']))){
        $user = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string ($conn, $_POST['password']);

        $query = "select id, email from funcionario where email = '{$user}' and senha = sha1('{$password}') and func_ativo = 1;";
      
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
       
        if($row == 1){
            $_SESSION['user'] =$user; 
            header("Location: ../model/administracaoIndex.php");    
        } else{
            $_SESSION['loginErro'] = "Usuário ou senha inválidos";
            header("Location: ../index.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos1";
        header("Location: ../index.php");
    }

    // var_dump($user);
      // var_dump($password);
      // die();
        
?>
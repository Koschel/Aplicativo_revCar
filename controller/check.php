<?php
    include("controleAcesso.php");
    include('../controller/conexao.php');

    if((isset($_POST['email'])) && (isset($_POST['password']))){
        $user = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string ($conn, $_POST['password']);

        $query = "select id, email, tipo, id_car from funcionario where email = '{$user}' and senha = sha1('{$password}') and func_ativo = 1;";
      
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $dado = $result -> fetch_array();
       
        if($row == 1){
            $_SESSION['user'] =$user;  
            if($dado['tipo'] == 1){
            header("Location: ../model/administracaoIndex.php");    
            }
            if($dado['tipo'] == 2){
                $_SESSION['id_car'] =$dado['id_car'];
            header("Location: ../model/modelMotorista.php");    
            }
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
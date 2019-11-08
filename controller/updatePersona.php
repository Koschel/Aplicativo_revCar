<?php
include("controleAcesso.php");
include("conexao.php");

//$inativar =  mysqli_real_escape_string($conn, trim($_POST['inativar']));

function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

switch (get_post_action('inativar', 'salvar')) {
    case 'inativar':
            $id_func =  mysqli_real_escape_string($conn, trim($_POST['inativar']));
            $sql = "update funcionario set func_ativo = 0 where id = '$id_func';";
            $result = mysqli_query($conn,$sql);
            header('Location: ../view/viewMonotoraPersona.php');
        break;

    case 'salvar':
            $id_func =  mysqli_real_escape_string($conn, trim($_POST['salvar']));
            $nome =  mysqli_real_escape_string($conn, trim($_POST['nome']));
            $email =  mysqli_real_escape_string($conn, trim($_POST['email']));
            $dt_adm =  mysqli_real_escape_string($conn, trim($_POST['dt_adm']));
            $car =  mysqli_real_escape_string($conn, trim($_POST['car']));
            
           
            $sql = "update funcionario set nome = '$nome', email = '$email', data_Admi = '$dt_adm' where id = '$id_func';";
            $result = mysqli_query($conn,$sql);
            header('Location: ../view/viewMonotoraPersona.php');
            
        break;

    default:
        echo "Erro ao cadastro duvidas ente em contato com o Administrador"
        header('Location: ../view/viewAdm.php');
        echo "erro";
}

?>
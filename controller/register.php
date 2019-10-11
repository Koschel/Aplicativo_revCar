<?php
session_start();
include("conexao.php");

$nome =  mysqli_real_escape_string($conn, trim($_POST['name']));
$dt_adm =  mysqli_real_escape_string($conn, trim($_POST['dt_adm']));
$email =  mysqli_real_escape_string($conn, trim($_POST['email']));
$password =  mysqli_real_escape_string($conn, trim($_POST['password']));

$sql = "select count(*) as t from funcionario where email = '$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['t']==1){
    $_SESSION['usuario_cadastrado'] = true;
    header('Location: ../view/viewCreatePersona.php');
    exit;
}
$sql = "INSERT INTO funcionario (nome, email,data_Admi,senha) VALUES ('$nome','$email','$dt_adm','$password')";
if($conn->query($sql)===TRUE){
    $_SESSION['status_cadastro']=true;
}
$conn->close();
header('Location: ../view/viewCreatePersona.php');
exit;
?>
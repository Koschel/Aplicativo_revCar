<?php
session_start();
include("controleAcesso.php");
include("conexao.php");

$placa =  mysqli_real_escape_string($conn, trim($_POST['placa']));
$marca =  mysqli_real_escape_string($conn, trim($_POST['marca']));
$modelo =  mysqli_real_escape_string($conn, trim($_POST['modelo']));
$dt_car =  mysqli_real_escape_string($conn, trim($_POST['dt_car']));
$dt_revis =  mysqli_real_escape_string($conn, trim($_POST['dt_revis']));

$sql = "select count(*) as t from carro where placa = '$placa'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['t']==1){
    $_SESSION['carro_cadastrado'] = true;
    header('Location: ../view/viewCreateCar.php');
    exit;
}
$sql = "INSERT INTO carro (placa, marca, modelo, ano, dt_ultima_revisao) VALUES ( '$placa','$marca','$modelo','$dt_car','$dt_revis');";
if($conn->query($sql)===TRUE){
    $_SESSION['status_cadastro']=true;
}
$conn->close();
header('Location: ../view/viewCreateCar.php');
exit;
?>
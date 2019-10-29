<?php
include("controleAcesso.php");
include("conexao.php");

$id_car =  mysqli_real_escape_string($conn, trim($_POST['id_car']));
$placa =  mysqli_real_escape_string($conn, trim($_POST['placa']));
$marca =  mysqli_real_escape_string($conn, trim($_POST['marca']));
$modelo =  mysqli_real_escape_string($conn, trim($_POST['modelo']));
$ano =  mysqli_real_escape_string($conn, trim($_POST['dt_car']));
$dt_rev =  mysqli_real_escape_string($conn, trim($_POST['dt_revis']));


$sql = "update carro set placa = '$placa', marca = '$marca', modelo = '$modelo', ano = '$ano', dt_ultima_revisao = '$dt_rev' where id = '$id_car';";

$result = mysqli_query($conn,$sql);
header('Location: ../view/viewMonotoraCar.php');





?>
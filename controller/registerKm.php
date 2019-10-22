<?php
include("controleAcesso.php");
include("conexao.php");

$id_car = $_SESSION['id_car'];


$km =  mysqli_real_escape_string($conn, trim($_POST['km']));

$sql = "INSERT INTO quilometragem (data_inserido, km, id_carro) VALUES  (NOW(),'$km','$id_car');";
$result = mysqli_query($conn,$sql);

$conn->close();
header('Location: ../view/viewMotorista.php');
exit;
?>
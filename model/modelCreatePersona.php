<?php
session_start();
include("../controller/controleAcesso.php");
include('../controller/conexao.php');

$var = $_POST;

if($_POST["persona"] == 1){
    header("Location: ../view/viewCreatePersona.php");
}if($_POST["car"] == 2){
    header("Location: ../view/viewCreateCar.php");
}
?>
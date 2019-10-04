<?php
session_start();
include('../controller/conexao.php');

$var = $_POST;
//var_dump($var);
//die();
if($_POST["persona"] == 1){
    header("Location: ../view/viewCreatePersona.php");
}if($_POST["car"] == 2){
    header("Location: ../view/viewCreateCar.php");
}
?>
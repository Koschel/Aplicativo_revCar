<?php
session_start();
include("../controller/controleAcesso.php");
include('../controller/conexao.php');
header("Location: ../view/viewMotorista.php");
?>
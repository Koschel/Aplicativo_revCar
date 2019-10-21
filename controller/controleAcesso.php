<?php 
session_start();
if(!$_SESSION['user']){
    header("../index.php");
}
?>
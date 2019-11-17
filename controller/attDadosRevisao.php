<?php
    include("../controller/controleAcesso.php");
    include("../controller/conexao.php");

    $id_car = $_POST['id_carro'];
    $dt_revisao = $_POST['dt_revisao'];
    $km = $_POST['km'];

    $sqlKM = "select km_utima_revisao as KM_ult from carro where id = '$id_car'";
    $resultKM = mysqli_query($conn, $sqlKM);
    $dadoKM = $resultKM -> fetch_array();

    if($km > $dadoKM['KM_ult']){
        $sql = "update carro SET dt_ultima_revisao = '$dt_revisao' , km_utima_revisao = '$km' where id = '$id_car'";
        $result = mysqli_query($conn, $sql);
    }else{
        $_SESSION['km_invalido'] = "KM precisa ser maior que o atual.";
        header('Location: ../view/viewAdm.php');
    }

    $conn->close();
    header('Location: ../view/viewAdm.php');
?>
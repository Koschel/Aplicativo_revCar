<?php
$idCar = $dado['id_car'];

$sqlUm = "select  (q.km - c.km_utima_revisao) < 10000 as km_limkite from quilometragem q INNER JOIN carro c on q.id_carro = c.id where c.id = '$idCar' order by q.id DESC LIMIT 1";
$resultUm = mysqli_query($conn, $sqlUm);
$dadoUm = $resultUm -> fetch_array();

if($dadoUm['km_limkite'] == 1){  
   
    $_SESSION['carStatus'] = "light";
}else{
    $_SESSION['carStatus'] = "danger";
}


?>
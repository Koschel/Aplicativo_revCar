<?php
$sqlUm = "select sum(q.km) as totalKm from quilometragem q INNER JOIN carro c on q.id_carro = c.id where q.data_inserido >= c.dt_ultima_revisao";
$resultUm = mysqli_query($conn, $sqlUm);
$dadoUm = $resultUm -> fetch_array();

var_dump($dadoUm);
die();

?>
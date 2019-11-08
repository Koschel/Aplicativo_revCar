<?php
$sqlUm = "select  (q.km - c.km_utima_revisao) < 10000 as km_limkite from quilometragem q INNER JOIN carro c on q.id_carro = c.id where c.id = 7 order by q.id DESC LIMIT 1";
$resultUm = mysqli_query($conn, $sqlUm);
$dadoUm = $resultUm -> fetch_array();

if($dadoUm == 1){
    
}

?>
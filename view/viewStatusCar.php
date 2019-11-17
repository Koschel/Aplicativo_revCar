<?php
include("../controller/controleAcesso.php");
include("../controller/conexao.php");
$id_car =  $_POST['id_carro'];

$sql = "select f.id as id_func,
               f.nome as nome,
               f.id_car,
               c.placa,
               c.modelo,
               c.dt_ultima_revisao,
               c.km_utima_revisao,
               q.km as km_limkite
        from quilometragem q 
            INNER JOIN carro c on q.id_carro = c.id 
            INNER JOIN funcionario f ON f.id_car = c.id 
        where c.id = '$id_car' order by q.id DESC LIMIT 1";

$result = mysqli_query($conn, $sql);
$dado = $result -> fetch_array();


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charser="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RevCar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <link href=../css/stylenav.css rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    </head>
    <body>
    <div>
    <?php include("navbar.php")?>
    </div>
    <div class="container card text-white  bg-secondary > mb-3" style="max-width: 18rem;margin-top: 4%;">
        <div class="card-header"><b><?php echo $dado['nome'];?></b> </br>Data Revisão: <?php echo str_replace("-", "/", $dado['dt_ultima_revisao']);?></div>
        <div class="card-body">
            <h5 class="card-title"><b>Placa Carro:</b> <?php echo $dado['placa'];?></h5>
            <p class="card-text">
            <b>Modelo:</b>              <?php echo $dado['modelo'];?></br>
            <b>Km Ultima revisão:</b>   <?php echo $dado['km_utima_revisao'];?></br>
            <b>Km Atual:</b>            <?php echo $dado['km_limkite'];?>
            
            </p>
        </div>
    </div>
    <div class="container card text-dark bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Atualizar dados</div>
  <div class="card-body">
    <form class="form-inline" action="../controller/attDadosRevisao.php" method = 'POST'>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only"></label>
            <input name = "dt_revisao" type="text" class="form-control" id="inputPassword2" placeholder="Data Revisão" onkeypress="$(this).mask('0000-00-00');">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only"></label>
            <input name= "km" type="text" class="form-control" id="inputPassword2" placeholder="Km da Revisão" onkeypress="$(this).mask('000000000');" >
        </div>
        <button type="submit" value="<?php echo $dado['id_car']?>" name="id_carro" class="btn btn-dark mb-2">Atualizar</button>
    </form>
  </div>
  
</div>
    </body>
</html>
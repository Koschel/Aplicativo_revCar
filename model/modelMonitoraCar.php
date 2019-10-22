<?php
    include("../controller/controleAcesso.php");
    include('../controller/conexao.php');

    $id_carro = $_POST["id_carro"];
    $sql = "select * from carro where id = '$id_carro'";
    $result = mysqli_query($conn, $sql);
    $dado = $result -> fetch_array()
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cadastro</title>
    <meta charser="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href=../css/stylenav.css rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <a class="navbar-brand" href="#"><?php echo $_SESSION['user'];?></a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="../view/viewAdm.php">Home</a>
            <a class="nav-item nav-link active" href="../view/viewMonitorar.php">Monitorar</a>
            </div>
        </div>
</nav>

<form style="margin: 3%;" class="text-center" action="../controller/updateCar.php" method = "POST">
<div >
    <h3>Cadastro de Veiculo</h3>
</div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Placa</label>
        <div class="col-sm-10">
            <input name="placa" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['placa']?>" onkeypress="$(this).mask('AAA-0000');">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-10">
            <input name="marca" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['marca']?>">
        </div>
    </div>   
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Modelo</label>
        <div class="col-sm-10">
            <input name="modelo" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['modelo']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Ano do Veiculo</label>
        <div class="col-sm-10">
            <input name="dt_car" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['ano']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Data Ultima Revisao (Ano-Mes-Dia)</label>
        <div class="col-sm-10">
            <input name="dt_revis" type="text" class="form-control" id="inputDate3" placeholder="<?php echo $dado['dt_ultima_revisao']?>" onkeypress="$(this).mask('0000-00-00');">
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-dark">Cadastrar</button>
    </div>       
</form>

</body>
</html>
<?php
include("../controller/controleAcesso.php");
include('../controller/conexao.php');

$id_func = $_POST["id_func"];

$sql = "select * from funcionario f where f.id = '$id_func'";
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
<script type="text/javascript">
        function optionCheck(){
          var option = document.getElementById("<?php $dado['tipo']?>");
          if(option == 2){
              document.getElementById("hiddenDiv").style.visibility ="visible";
          }
          if(option == 1){
              document.getElementById("hiddenDiv").style.visibility ="hidden";
          }
      }
      </script>

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

<form style="margin: 3%;" class="text-center" action="../controller/registerCar.php" method = "POST">
<div >
    <h3>EDITAR FUNCIONÁRIO</h3>
</div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input name="nome" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['nome'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['email'] ?>">
        </div>
    </div>   
    <div class= "form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Data de Adimissão</label>
        <div class="col-sm-10">
            <input name="dt_adm" type="text" class="form-control" id="inputDate3" placeholder="<?php echo $dado['data_Admi'] ?>">
        </div>
    </div>
    <div id="hiddenDiv" style="margin-top:20px;border:1px;visibility:hidden;">
      <select name="car"  class="custom-select custom-select-sm">
        <option selected>Selecione carro disponivel</option>
        <?php while($dado1 = $result -> fetch_array()){?>
        <option value="<?php echo $dado1['id_carro'] ?>"><?php echo $dado1['id_carro'] ?> - <?php echo $dado1['placa'] ?></option>
        <?php }?>
      </select>
      </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-info">Salvar</button>
      <button type="submit" class="btn btn-danger">Inativar</button>
    </div>       
</form>

</body>
</html>
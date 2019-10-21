<?php
    session_start();
    include("../controller/conexao.php");
    $sql = "SELECT * FROM carro c where not EXISTS (SELECT f.id_car from funcionario f WHERE f.id_car = c.id)";
    $result = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Funcionario</title>
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
          var option = document.getElementById("options").value;
          if(option == "2"){
              document.getElementById("hiddenDiv").style.visibility ="visible";
          }
          if(option == "1"){
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
            <a class="nav-item nav-link active" href="viewAdm.php">Home</a>
            <a class="nav-item nav-link active" href="viewMonitorar.php">Monitorar</a>
        </div>
    </div>
</nav>
<form action="../controller/register.php" method = "POST" style="margin: 3%;" class="text-center">
<div>
    <h3>Cadastro de Funcionario</h3>
</div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <input name = "name" type="text" class="form-control" id="inputText3" placeholder="Nome">
        </div>
    </div>
    <fieldset class="form-group">
    <div class="row text-left">
      <legend class="col-form-label col-sm-2 pt-0"><b>Classificação de Funcionario</b></legend>
      <div class="col-sm-10">
      <select name="tipo" id="options" onchange="optionCheck()" class="custom-select">
        <option value="1">Funcionario</option>
        <option value="2">Motorista</option>
      </select >
      <div id="hiddenDiv" style="margin-top:20px;border:1px;visibility:hidden;">
      <select name="car"  class="custom-select custom-select-sm">
        <option selected>Selecione carro disponivel</option>
        <?php while($dado = $result -> fetch_array()){?>
        <option value="<?php echo $dado['id'] ?>"><?php echo $dado['id'] ?> - <?php echo $dado['modelo'] ?></option>
        <?php }?>
      </select>
      </div>
      </div>
    </div>
  </fieldset>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <input name = "dt_adm" type="date" class="form-control" id="inputText3" placeholder="Data de Admição">
        </div>
    </div>   
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <input name = "email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <input name = "password" type="password" class="form-control" id="inputPassword3" placeholder="Senha">
        </div>
    </div>  
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-dark">Cadastrar</button>
    </div>
  </div>  
</form>
</body>
</html>
<?php
include("../controller/controleAcesso.php");
include('../controller/conexao.php');

$id_func = $_POST["id_func"];

$sql = "select f.*, c.placa, c.modelo from funcionario f left join carro c on f.id_car = c.id where f.id = '$id_func'";
$sqlC = "SELECT * FROM carro c where not EXISTS (SELECT f.id_car from funcionario f WHERE f.id_car = c.id)";
$resultC = mysqli_query($conn, $sqlC); 
$result = mysqli_query($conn, $sql);

$dado = $result -> fetch_array();
//var_dump($dado['tipo']); die();
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

</head>
<body onload="optionCheck()">
<script type="text/javascript">
        function optionCheck(){
         
          var option = document.getElementById("tipo").value;
          if(option == "2"){
              document.getElementById("hiddenDiv").style.visibility ="visible";
          }
          if(option == "1"){
              document.getElementById("hiddenDiv").style.visibility ="hidden";
          }
      }
      //id="hiddenDiv" visibility:hidden;
      </script>

<?php include("../view/navbar.php")?>

<form style="margin: 3%;" class="text-center" action="../controller/updatePersona.php" method = "POST" id="meuform" >
<div >
    <h3>EDITAR FUNCIONÁRIO</h3>
</div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input name="nome" type="text" class="form-control" id="inputText3" required="required" placeholder = "<?php echo $dado['nome'] ?>" value="<?php echo $dado['nome'] ?>" >
        </div>
    </div>
    <div class="form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="inputText3" placeholder="<?php echo $dado['email'] ?>" value="<?php echo $dado['email'] ?>">
        </div>
    </div>   
    <div class= "form-group row">
        <label for="inputText3" class="col-sm-2 col-form-label">Data de Adimissão</label>
        <div class="col-sm-10">
            <input name="dt_adm" type="text" class="form-control" id="inputDate3" placeholder="<?php echo $dado['data_Admi'] ?>" value="<?php echo $dado['data_Admi'] ?>">
        </div>
    </div>
    <div class="col-sm-10">
    <div class= "form-group row" id="hiddenDiv" style="margin-top:20px;border:1px;">
    <label for="inputText3" class="col-sm-2 col-form-label">Veiculo: <?php echo $dado['placa']?> - <?php echo $dado['modelo']?></label>
      <select name="car"  class="custom-select custom-select-sm">
        <option selected>Selecione carro disponivel</option>
        <?php while($dado1 = $resultC -> fetch_array()){?>
        <option value="<?php echo $dado1['id'] ?>"><?php echo $dado1['id'] ?> - <?php echo $dado1['placa'] ?></option>
        <?php }?>
      </select>
      </div>
      </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" value ="<?php echo $dado["id"]?>" name="salvar" class="btn btn-info">Salvar</button>
      <button type="submit" value ="<?php echo $dado["id"]?>" name="inativar" class="btn btn-danger">Inativar</button>
    </div>       
    <div>
        <input type="hidden" id="tipo" name="tipo" value="<?=$dado['tipo']?>"/>
    </div>
</form>

</body>
</html>
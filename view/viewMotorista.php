<?php 
include("../controller/controleAcesso.php");
include('../controller/conexao.php');

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
    
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <a class="navbar-brand" href="#"><?php echo $_SESSION['user'];?></a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Status Veiculo</a>
            <a class="nav-item nav-link active" href="#">Sair</a>
            </div>
        </div>
    </nav>
    <div>
    <form style="margin: 3%;" class="text-center" action="../controller/registerKm.php" method = "POST">
    '<div >
        <h3>Cadastro de KM Percorridos</h3>
    </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input name="km" type="text" class="form-control" id="inputText3" placeholder="KM">
            </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>       
    </form>
    </div>
    </body>
</html>


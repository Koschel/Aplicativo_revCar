<?php
    include("../controller/controleAcesso.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charser="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href=../css/stylenav.css rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
<?php include("navbar.php")?>
        
    </nav><!--style="margin-top: 0%;"-->
    <div class="container text-center">
        <div>
            <img class="mb-4" src="../img/logo.png" alt="" width="100" height="135">
            <h3>CADASTRAR<h3>
            
            <form  method="POST" action="../model/modelCreatePersona.php">
                <div class="btn-group col" role="group" aria-label="Basic example">
                    <button name = "persona" value = 1 type="submit" class="btn btn-info" style="margin-right: 1px;">Pessoa</button>
                    <button name = "car" value = 2 type="submit" class="btn btn-info" style="margin-left: 1px;">Veiculo</button>
                </div>
            </form>
            
        </div>
    </div>

</body>
</html>

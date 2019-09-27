<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charser="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>RevCar</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href=css/style.css rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" method="POST" action="controller/check.php">
            <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
                <label for="inputText" class="sr-only">Usuário</label>
                <input type="email" name="email" id="inputText" class="form-control" placeholder="Usuário">
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha">
            <button class="btn btn-lg btn-outline-dark btn-block" type="submit">Acessar</button>
            <p class="text-center text-danger">
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset ($_SESSION['loginErro']);
                }
            ?>
            </p>
        </form>
    </body>
</html>
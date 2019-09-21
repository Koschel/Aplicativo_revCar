<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charser="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FrotaApp</title>
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
        <form class="form-signin" method="POST" action="check">
            <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
                <label for="inputEmail" class="sr-only">Usuário</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <button class="btn btn-lg btn-outline-dark btn-block" type="submit">Acessar</button>
        </form>
    </body>
</html>
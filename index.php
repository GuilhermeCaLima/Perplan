<!DOCTYPE html>
<html>

<head>
    <meta charsert="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>
        <?php include("titulo.php"); ?>
    </title>


</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form name="formLogin" action="logar.php" method="POST">
                <img class="img-fluid mb-3 d-block mx-auto" width="300" height="200" src="img/perplan-png.png">
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="campoEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="campoSenha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="botaoEntrar">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
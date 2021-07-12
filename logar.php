<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
        <title>
            <?php include ("titulo.php"); ?>
        </title>
    </head>
    <body>
        <?php
        $email = $_POST["campoEmail"];
        $senha = $_POST["campoSenha"];
        include("conexaoBD.php");
        $consulta = "SELECT IDUSERS FROM users WHERE (EMAIL=?) AND (SENHA=?);";
        $resposta = $PDO->prepare($consulta);
        $resposta->bindvalue(1, $email);
        $resposta->bindvalue(2, $senha);
        $resposta->execute();
        $registros = $resposta->rowCount();
        if ($registros == 0){
            echo "<div class='row justify-content-md-center'><p class='alert alert-danger'>E-Mail e Senha inválidos. Clique <a href='index.php'>aqui</a> para voltar.</p></div>";
        } else {
            foreach ($resposta as $registro) {
                $idUsuario = $registro["IDUSERS"];
            }
            include("Usuario.php");
            $usuario = new Usuario();
            $usuario->consultarUsuario($idUsuario);
            echo "<div class='row justify-content-md-center'><p class='alert alert-success'>Olá, " . $usuario->getNome() . "! Clique <a href='usuarios.php'>aqui</a> para continuar.";
        }
        ?>
    </body>
</html>
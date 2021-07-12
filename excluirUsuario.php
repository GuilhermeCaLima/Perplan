<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
        <title> <?php include("titulo.php"); ?> </title>
    </head>
    <body>
        <?php
        
        $idUsuario=$_GET["idUsuario"];
        include("Usuario.php");
        $usuario = new Usuario();
        $usuario->setIdUsuario($idUsuario);
        $usuario->excluirUsuario();
        echo "<div class='row justify-content-md-center'><p class='alert alert-danger'>Usuário excluído. Clique <a href='usuarios.php'>aqui</a> para continuar.";

        ?>
    </body>
</html>
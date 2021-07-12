<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title><?php include("titulo.php"); ?></title>

</head>

<body>
    <?php
    $idUsuario = $_GET["campoIdusuario"];
    $nome = $_GET["campoNome"];
    $email = $_GET["campoEmail"];
    $senha = $_GET["campoSenha"];
    $repetirSenha = $_GET["campoRepetirSenha"];

    if ($senha != $repetirSenha) {
        echo "<div class='row justify-content-md-center'><p class='alert alert-danger'>Senhas inválidas. Clique <a href='usuarios.php'>aqui</a> para retornar.";
    }

    include("Usuario.php");

    $usuario = new Usuario();

    $usuario->setIdUsuario($idUsuario);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    if ($usuario->getIdUsuario() == 0) {
        $usuario->inserirUsuario();
        echo "<div class='row justify-content-md-center'><p class='alert alert-success'>Usuário cadastrado. Clique <a href='usuarios.php'>aqui</a> para continuar.";
    } else {
        $usuario->alterarUsuario();
        echo "<div class='row justify-content-md-center'><p class='alert alert-success'>Usuário alterado. Clique <a href='usuarios.php'>aqui</a> para continuar.";
    }
    ?>
</body>

</html>
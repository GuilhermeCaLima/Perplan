<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php include("titulo.php"); ?> </title>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container ">
        <div class="bg-light">
            <div class="row justify-content-center">
            <h2 class="userh2">Usuários</h2>
            </div>
            <br><br><br>
            <?php include("conexaoBD.php"); ?>
            <table class="table">
                <tr>
                    <td scope="col">Alterar</td>
                    <td scope="col">Excluir</td>
                    <td scope="col">Código</td>
                    <td scope="col">Nome</td>
                    <td scope="col">E-Mail</td>
                </tr>
        </div>
        <a href="editarUsuario.php?idUsuario=0"><button class="btn btn-primary btn-sm">Novo Usuário</button></a>
    </div>
    <?php
    $consulta = "SELECT * FROM users ORDER BY NOME;";
    $resposta = $PDO->prepare($consulta);
    $PDO->exec("SET CHARACTER SET utf8");
    $resposta->execute();
    foreach ($resposta as $registro) {
        echo ("<tr>");
        echo ("<td><a href='editarUsuario.php?idUsuario=" . $registro["IDUSERS"] . "'><button class='btn btn-outline-warning'>Alterar</button></a></td>");
        echo ("<td><a href='excluirUsuario.php?idUsuario=" . $registro["IDUSERS"] . "'><button class='btn btn-outline-danger'>Excluir</button></a></td>");
        echo ("<td>" . $registro["IDUSERS"] . "</td>");
        echo ("<td>" . $registro["NOME"] . "</td>");
        echo ("<td>" . $registro["EMAIL"] . "</td>");
        echo ("</tr>");
    }
    ?>
</body>

</html>
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
        $idUsuario = $_GET["idUsuario"];
        $nome="";
        $email="";
        $senha="";

        if($idUsuario<>0){
            include("Usuario.php");
            $usuario = new Usuario();
            $usuario->consultarUsuario($idUsuario);
            $nome=$usuario->getNome();
            $email=$usuario->getEmail();
            $senha=$usuario->getSenha();
        }
        ?>

        <br><br><br>
        <div class="container">
	<div class="row justify-content-md-center"><div class="col-md-auto">
	
		<div class="alert alert-success" role="alert">
	<strong>Preencha todos os campos antes de enviar.</strong>
		</div>
	<strong>Cadastro de Usuário</strong></br></br>
        <form name="formUsuario" action="salvarUsuario.php" method="GET">
            <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-3 col-form-label col-form-label-sm">Nome:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="campoNome" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-3 col-form-label col-form-label-sm">Código:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control form-control-sm" name="campoIdusuario" value="<?php echo $idUsuario; ?>" readonly>
		</div>
	 </div>
  
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-3 col-form-label col-form-label-sm">E-mail:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control form-control-sm" name="campoEmail" required="required">
		</div>
	 </div>
	 
	 <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-3 col-form-label col-form-label-sm">Senha:</label>
          <div class="col-sm-4">
           <input type="password" class="form-control form-control-sm" name="campoSenha" required="required">
	      </div>
	 </div>
	 
	    <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-3 col-form-label col-form-label-sm">Repetir senha:</label>
          <div class="col-sm-4">
           <input type="password" class="form-control form-control-sm" name="campoRepetirSenha" required="required">
	      </div>
	    </div>
		
 
	  <div class="form-group row">
      <div class="offset-sm-5 col-sm-10">
        <button type="submit" class="btn btn-primary" name="botaoSalvar">Enviar</button> 
      </div>
        </form>
    </body>
</html>
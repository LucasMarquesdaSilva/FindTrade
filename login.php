<?php require_once("cabecalho.php");
      require_once("logica-usuario.php");
?>
  <div class = "container-fluid container-login">
    <div class = "row row-login">
          <div class = "body">
            <div class = "content-body">
        			<?php if(usuarioEstaLogado()) {?>
        				<p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Deslogar</a></p>
        			<?php } else {?>

          		<h1 class = "h1-body">Faça Login.</h1>
              <p class = "large">Encontre uma variedade de produtos em nosso site.</p>
        			<form action="login-admin.php" method="post">
        					<input class="form-control form-control-login" type="email" name="email" placeholder="E-mail"><br />
        					<input class="form-control form-control-login" type="password" name="senha" placeholder="Senha"><br />
        					<button class="btn btn-success btn-sucesso">Login</button>
        			</form>
      			  <?php } ?>
            </div>
          </div>
        </div>
      </div>
<?php include("rodape.php"); ?>

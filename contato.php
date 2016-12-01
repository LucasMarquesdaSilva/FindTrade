<?php require_once("cabecalho.php"); ?>
<div class ="container container-position ">
	<div class = "container container-contato">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<h2 class = "h2-form-prod">Contato</h2>
			</div>
			<div class = "panel-body">
	<form action="envia-contato.php" method="post" class = "conteudo-form-contato">
		<div class = "form-group">
			Nome
			<input type="text" name="nome" class="form-control form-contato">
		</div>
		<div class = "form-group">
			Email
			<input type="email" name="email" class="form-control form-contato">
		</div>
		<div class = "form-group">
			Mensagem
			<textarea class="form-control form-contato" name="mensagem"></textarea>
		</div>
				<button class="btn btn-primary form-contato">Enviar</button>
	</form>
</div>
</div>
</div>
</div>
<?php require_once("rodape.php"); ?>

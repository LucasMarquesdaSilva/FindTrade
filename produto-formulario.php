<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");



$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>
<div class = "container container-position-form">
	<div class = "container container-formulario">
		<div class = "panel panel-default">
			<div class = "panel-heading">
			<h2 class = "h2-form-prod">Formulário de produto</h2>
		</div>
			<div class = "panel-body">
	<form action="adiciona-produto.php" method="post">
		<!-- <table class="table"> -->

			<?php include("produto-formulario-base.php"); ?>

			<!-- <tr> -->
				<!-- <td> -->
				<div class = "form-group">
					<button class="btn btn-primary form-contato" type="submit">Cadastrar</button>
				</div>
				<!-- </td> -->
			<!-- </tr> -->
		<!-- </table> -->
	</form>
</div>
</div>
</div>
</div>
<?php include("rodape.php"); ?>

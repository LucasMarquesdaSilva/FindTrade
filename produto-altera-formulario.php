<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
<div class = "container container-position-form">
	<div class = "container container-formulario">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<h2 class = "h2-form-prod">Alterando produto</h2>
			</div>
			<div class = "panel-body">
				<form action="altera-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<table class="table">
						<?php include("produto-formulario-base.php"); ?>
						<tr>
							<td>
								<button class="btn btn-primary form-contato" type="submit">Alterar</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("rodape.php"); ?>

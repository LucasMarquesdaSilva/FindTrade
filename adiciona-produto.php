<?php require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$contato = $_POST['contato'];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}
?>
 <div class = "container">
	<div class = "principal">
	<?php  mostraAlerta("success"); ?>
	<?php mostraAlerta("danger"); ?>

<?php if(insereProduto($conexao, $nome, $preco, $descricao, $contato, $categoria_id, $usado)) { ?>

	<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>
	 </div>
</div>
<?php //include("rodape.php"); ?>

<?php require_once("cabecalho.php");
require_once("banco-produto.php");
verificaUsuario();
$id = $_POST['id'];
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
<?php
if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $contato, $categoria_id, $usado)) { ?>
	<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi alterado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>
</div>
</div>
<!-- <?php //include("rodape.php"); ?>			 -->

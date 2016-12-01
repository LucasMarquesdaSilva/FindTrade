<div class = "form-group">
	Nome
	<input class="form-control form-contato" type="text" name="nome" value="<?=$produto['nome']?>">
</div>
<div class = "form-group">
	Preço (apenas reais)
	<input  class="form-control form-contato" type="number" name="preco"
		value="<?=$produto['preco']?>">
</div>
<div class = "form-group">
	Descrição
	<textarea class="form-control form-contato" name="descricao"><?=$produto['descricao']?></textarea>
</div>
<div class = "form-group">
	contato
	<textarea class="form-control form-contato" name="contato"><?=$produto['contato']?></textarea>
</div>
<div class = "form-group">
	Estado do produto
	<select name="categoria_id" class="form-control form-contato">
		<?php foreach($categorias as $categoria) :
			$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
			$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
			<option value="<?=$categoria['id']?>" <?=$selecao?>>
					<?=$categoria['nome']?>
			</option>
		<?php endforeach ?>
	</select>
</div>

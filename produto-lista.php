<?php require_once("cabecalho.php");
 require_once("banco-produto.php");
 require_once("logica-usuario.php");
 require_once("banco-categoria.php");
  ?>
  <div class = "container container-position container-produto-lista">
    <div class = "form-filtro">
      <form action = "produto-lista.php" method = "post" class = "filtra-produto">
        <!-- <div class = "form-group form-contato"> -->
        <select name="categoria_id" class="form-control">
    		<?php
        $categorias = listaCategorias($conexao);
        foreach($categorias as $categoria):
          $produtos_categoria = $categoria['nome'];
          ?>
    			<option value="<?=$categoria['id']?>"><?=$produtos_categoria?></option>

    		<?php
        // $categoria_id = $categoria['id'];
         endforeach ?>

      </select>
        <br />
        <button type = "submit" class = "btn btn-default">Filtrar</button>

      </form>
    </div>
      <table class="table table-striped table-responsive table-text">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Preco</th>
            <th>Descrição</th>
            <th>Contato</th>
            <th>Categoria</th>
              <?php if(usuarioEstaLogado()) {?>
                <th>#</th>
                <th>#</th>
              <?php } ?>
            </tr>
        </thead>
        <tbody>
      		<?php
            if(isset($_REQUEST['categoria_id'])){
              $categoria = $_REQUEST["categoria_id"];
              $produtos = filtraProdutosPorCategoria($conexao, $categoria);
            } else{
              $produtos = listaProdutos($conexao);
            }
      			foreach($produtos as $produto) : ?>
      				<tr>
      					<td><?= $produto['nome'] ?></td>
      					<td><?= $produto['preco'] ?></td>
      					<td><?= substr($produto['descricao'], 0, 40) ?></td>
      					<td><?= substr($produto['contato'], 0, 40) ?></td>
      					<td><?= $produto['categoria_nome']?></td>
              <?php if(usuarioEstaLogado()) {?>
      					<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
      					<td>
      			      <form action="remove-produto.php" method="post">
      						  <input type="hidden" name="id" value="<?=$produto['id']?>">
      						  <button class="btn btn-danger">remover</button>
      					  </form>
      					</td>
              <?php } ?>
      			  </tr>
      				<?php
      		  endforeach
      			?>
        </tbody>
    </table>
  </div>
 <?php include("rodape.php"); ?>

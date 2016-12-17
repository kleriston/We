

<div class="col-md-12">

<h1>Lista de Produtos</h1>


	<table >
	<td><a class="btn btn-primary btn-block" href="/calculadora/Produto/Cadastrar" >Novo Produto</a></td>
		<tr>
			<th>Nome</th>
			<th>Código</th>
			<th>Valor</th>
		</tr>

	

	<?php foreach ($query as $row) {?> 
		
	
	<tr>
		
		<td><?= $row->nome; ?></td>

		<td><?= $row->codigo; ?></td>

		<td><?= $row->valor; ?></td>

<td><a class="btn btn-primary btn-block" href="/calculadora/Produto/atualizar/<?php echo $row->id?>"> Atualizar</a></td>
<td><a class="btn btn-primary btn-block" href="/calculadora/Produto/Excluir/<?php echo $row->id?>" > Excluir</a></td>


	</tr>
<?php }?>

<td><a class="btn btn-primary btn-block" href="/calculadora/Produto/excluirTodos" > Excluir Todos</a></td>
	</table>

</div>





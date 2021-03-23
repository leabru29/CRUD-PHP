<?php
include_once "includes/header.php";
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="striped">Dados do produto vendido.</h3>
		<form>
			<div class="input-field col s12">
				<input type="text" id="codigo" name="codigo">
				<label for="codigo">Código</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="nome" name="nome">
				<label for="nome">Nome Produto</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="quantidade" name="quantidade">
				<label for="quantidade">Quantidade</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="valor" name="valor">
				<label for="valor">Valor</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="data" name="data">
				<label for="data">Data</label>
			</div>
		</form>

      	<br>
      	<button class="btn" name="btn-cadastrar">Incluir venda</button>
      	<a href="index.php" class="btn green">Voltar a lista de vendas</a>
	</div>
</div>

<?php
include_once "includes/footer.php";
?>
<?php
include_once "includes/header.php";
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="striped">Lista de vendas de produtos</h3>
		<table class="striped centered">
	        <thead>
	          <tr>
	              <th>Código</th>
	              <th>Nome Produto</th>
	              <th>Quantidade</th>
	              <th>Valor</th>
	              <th>Data da venda</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>BLB</td>
	            <td>Bíblia</td>
	            <td>20</td>
	            <td>R$ 50.00</td>
	            <td>20/06/2021</td>
	          </tr>
	        </tbody>
      	</table>
      	<br>
      	<a href="adicionar.php" class="btn">Adicionar venda</a>
	</div>
</div>

<?php
include_once "includes/footer.php";
?>
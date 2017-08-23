<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vendas Mac da vila</title>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mac.css" rel="stylesheet">
	<script src="script/jquery.min.js"></script> 
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>


<body>
	
	<div class="container-fluid" style="padding:0;"><!--container principal-->
		<?php
			include "sidemenu.php"; 
			include "cadastrarcliente.php";
			include "localizarcliente.php";
			include "cadastrarproduto.php";
		?>

		<div class="col-md-10">
			<div class="row" id="inicio" hidden>
				<h1>Inicio</h1>
			</div>

			<div class="row" id="novoPedido" hidden>
				<h1>Novo Pedido</h1>
			</div>

			<div class="row" id="exibirCardapio" hidden>
				<h1>Exibir Cardapio</h1>
			</div>
		</div>
	</div>
</body>
</html>

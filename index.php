<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vendas Mac da vila</title>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="script/jquery.min.js"></script> 
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>


	<style>

	@font-face {
		font-family: cantarell;
		src: url('resources/Cantarell-Regular.otf');
	    }

	*{
		font-family:cantarell;
	}

	#sideMenu {
		font-size: 15pt;
		cursor: default;
		background-color:rgba(35,40,45,1);
		height:100vh;

	}

	#sideMenuItens {
		color: rgba(255,255,255,.6);
		list-style-type: none;
		padding-left:0;
		
	}

	#sideMenuItens li{
		padding-left:10px;
		margin-top:10px;
		margin-bottom:10px;
		padding-top:10px;
		padding-bottom:10px;
	}

	#sideMenuItens li:hover {
		background-color:rgb(93, 103, 113);

	}

	#sideMenuItens span {
		color: rgba(255,255,255,.8);

	}
	.noselect {
	  -webkit-touch-callout: none; /* iOS Safari */
	    -webkit-user-select: none; /* Safari */
	     -khtml-user-select: none; /* Konqueror HTML */
	       -moz-user-select: none; /* Firefox */
		-ms-user-select: none; /* Internet Explorer/Edge */
		    user-select: none; /* Non-prefixed version, currently
		                          supported by Chrome and Opera */
	}
	</style>


<body>
	
	<div class="container-fluid" style="padding:0;">

<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->
		<div class="hidden-xs col-sm-3 col-md-2  noselect" id="sideMenu">
			<div class="row">
				<ul id="sideMenuItens">
					<li><span class="glyphicon glyphicon-home"></span> Inicio</li>
					<li><span class="glyphicon glyphicon-shopping-cart"></span> Novo Pedido</li>
					<li><span class="glyphicon glyphicon-user"></span> Cadastrar Cliente</li>
					<li><span class="glyphicon glyphicon-barcode"></span> Cadastrar Produto</li>
					<li><span class="glyphicon glyphicon-search"></span> Localizar Cliente</li>
					<li><span class="glyphicon glyphicon-list-alt"></span> Exibir Cardápio</li>
				<ul>
			</div>
		</div>
<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->
		<div class="col-md-10">
			<div class="row" id="inicio">
				<h1>Inicio</h1>
			</div>

			<div class="row" id="novoPedido">
				<h1>Novo Pedido</h1>
			</div>

			<div class="row" id="cadastrarCliente">
				<h1>Cadastrar Cliente</h1>
			</div>

			<div class="row" id="cadastrarProduto">
				<h1>Cadastrar Produto</h1>
			</div>

			<div class="row" id="localizarCliente">
				<h1>Localizar Cliente</h1>
			</div>

			<div class="row" id="exibirCardapio">
				<h1>Exibir Cardapio</h1>
			</div>
		</div>
























	</div>
</body>
</html>


<!--



-->


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
	
	<div class="container-fluid" style="padding:0;"><!--container principal-->

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
			<div class="row" id="inicio" hidden>
				<h1>Inicio</h1>
			</div>
<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->
			<div class="row" id="novoPedido" hidden>
				<h1>Novo Pedido</h1>
			</div>
<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->
			<div class="row" id="cadastrarCliente" >
				<div class="col-md-6">
					<div class="signup-form-container">
					<!-- form start -->
					<form role="form" id="register-form" autocomplete="off">
						<div class="form-header">
							<h1 class="form-title" style="margin-bottom:50px;"><i class="fa fa-user"></i> Cadastrar Cliente</h1>              
						</div>

						<div class="form-body">

							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-12">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
										<input name="nome" type="text" class="form-control" placeholder="Nome">
							   		</div>
							   		<span class="help-block" id="error"></span>
								</div>
							</div>
							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-8">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-road"></span>
										</div>
										<input name="rua" type="text" class="form-control" placeholder="Rua">
									</div>
									<span class="help-block" id="error"></span>                     
								</div>

								<div class="form-group col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-home"></span>
										</div>
										<input name="numero" type="number" class="form-control" placeholder="Numero">
									</div>
									<span class="help-block" id="error"></span>                     
								</div>

								<div class="form-group col-md-6">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-envelope"></span>
										</div>
										<input name="cep" type="number" class="form-control" placeholder="Cep">
									</div>
									<span class="help-block" id="error"></span>                     
								</div>

								<div class="form-group col-md-6">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-map-marker"></span>
										</div>
										<input name="ref" type="text" class="form-control" placeholder="Ponto de Referencia">
									</div>
									<span class="help-block" id="error"></span>                     
								</div>



							</div>
							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-6">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-earphone"></span>
										</div>
										<input name="phone" id="phone" type="number" class="form-control" placeholder="Telefone">
									</div>  
									<span class="help-block" id="error"></span>                    
								</div>
							    
								<div class="form-group col-md-6">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-phone"></span>
										</div>
										<input name="celphone" type="number" class="form-control" placeholder="Celular">
									</div>  
									<span class="help-block" id="error"></span>                    
						   		</div>
					     		</div>
							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
						</div>

						<div class="form-footer">
							<button type="submit" class="btn btn-lg btn-info">
								<span class="glyphicon glyphicon-floppy-disk"></span> Salvar
							</button>
						</div>
					</form>
					</div>
				</div>

				<div class="col-md-6 text-center">
					<h1>Clientes Cadastrados</h1>

					<!-- striped style  OU TABELA ZEBRA-->
					<table class="table table-striped">
					    <thead>
						<tr>
						    <th>ID</th>
						    <th>Nome</th>
						    <th>Telefone</th>
						    <th>Endereço</th>
						</tr>
					    </thead>

					    <tbody>
						<tr>
						    <td>1</td>
						    <td>John Pate</td>
						    <td>AUSXYZ1481</td>
						    <td>johnpate@mydomain.com</td>
						</tr>
						<tr>
						    <td>2</td>
						    <td>Gina Ray</td>
						    <td>AUSXYZ2932</td>
						    <td>ginaray@mydomain.com</td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Paul Smith</td>
						    <td>AUSXYZ6381</td>
						    <td>paulsmith@mydomain.com</td>
						</tr>
						<tr>
						    <td>4</td>
						    <td>Darryl Rob</td>
						    <td>AUSXYZ7264</td>
						    <td>darrylrob@mydomain.com</td>
						</tr>
						<tr>
						    <td>5</td>
						    <td>Tina Michael</td>
						    <td>AUSXYZ8330</td>
						    <td>tinamichael@mydomain.com</td>
						</tr>

					    </tbody>
					</table>
				</div>
			</div>
<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->

			<div class="row" id="cadastrarProduto" hidden>
				<div class="col-md-6">
					<div class="signup-form-container">
					<!-- form start -->
					<form role="form" id="register-form" autocomplete="off">
						<div class="form-header">
							<h1 class="form-title" style="margin-bottom:50px;"><i class="fa fa-user"></i> Cadastrar Produto</h1>              
						</div>

						<div class="form-body">

							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-12">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-barcode"></span>
										</div>
										<input name="nomeProduto" id="nomeProduto" type="text" class="form-control" placeholder="Nome do Produto">
									</div>  
									<span class="help-block" id="error"></span>                    
								</div>
							</div>
							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-6">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-usd"></span>
										</div>
										<input name="precoProduto" id="precoProduto" type="number" class="form-control" placeholder="Preço">
									</div>  
									<span class="help-block" id="error"></span>                    
								</div>
							</div>
							<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
							<div class="row">
								<div class="form-group col-md-6">
									<label for="categoriaProduto">Categoria</label>
									<select class="form-control" id="categoriaProduto">
										<option>Comidas</option>
										<option>Bebidas</option>
										<option>Porções</option>
									</select>
								</div>
							</div>


						</div>

						<div class="form-footer">
							<button type="submit" class="btn btn-lg btn-info">
								<span class="glyphicon glyphicon-floppy-disk"></span> Salvar
							</button>
						</div>
					</form>
					</div>

				</div>
			</div>
<!--  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  x  -->












			<div class="row" id="localizarCliente" hidden>
				<h1>Localizar Cliente</h1>
			</div>

			<div class="row" id="exibirCardapio" hidden>
				<h1>Exibir Cardapio</h1>
			</div>
		</div>
























	</div>
</body>
</html>


<!--



-->


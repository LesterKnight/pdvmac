<div class="col-md-10" id="div_cadproduto" hidden>
	<div class="row">
		<div class="col-md-6">
			<div class="signup-form-container">
			<!-- form start -->
				<form role="form" id="formularioProdutos" autocomplete="off">
					<input name="idProduto" id="idProduto" type="hidden" value="0">
					<div class="form-header">
						<h1 class="form-title" style="margin-bottom:50px;"><i class="fa fa-user"></i> Cadastrar Produto</h1>              
					</div>

					<div class="form-body">
					<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
						<div class="row">
							<div class="form-group col-md-10">
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


		<div class="col-md-6" style="background-color:rgba(0,0,0,.05);max-height: 100vh;overflow:auto;">
			<h1>Produtos Cadastrados</h1>
			<!-- striped style  OU TABELA ZEBRA-->
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Preço</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Big Mac</td>
						<td>Lanche</td>
						<td>R$4,50</td>
					</tr>

					<tr>
						<td>2</td>
						<td>Big Mac</td>
						<td>Lanche</td>
						<td>R$4,50</td>
					</tr>

					<tr>
						<td>3</td>
						<td>Mac lanche feliz</td>
						<td>Lanche</td>
						<td>R$4,50</td>
					</tr>

					<tr>
						<td>4</td>
						<td>Batata</td>
						<td>Porção</td>
						<td>R$4,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>Coca-cola</td>
						<td>Bebida</td>
						<td>R$5,00</td>
					</tr>
				</tbody>
			</table>
			<!--BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA BUSCA -->
			<div class="signup-form-container">
			<!-- form start -->
				<form role="form" id="register-form" autocomplete="off">
					<div class="form-header">
						<h3 class="form-title"><i class="fa fa-user"></i> Localizar Produto</h3>              
					</div>
					<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
					<div class="form-body">
						<div class="row">
							<div class="form-group col-md-8">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-search"></span>
									</div>
									<input name="nomeProduto" id="nomeProduto" type="text" class="form-control" placeholder="Insira o dado da busca">
								</div>  
								<span class="help-block" id="error"></span>                    
							</div>
						</div>
					</div>
				</form>
			</div>




		</div>
	</div>
</div>


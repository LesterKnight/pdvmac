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

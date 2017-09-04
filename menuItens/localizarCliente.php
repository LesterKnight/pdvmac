<div class="col-md-10" id="div_localizar" hidden>
	<h1>Clientes Cadastradoss</h1>
	<div class="col-md-12" style="overflow-y:scroll;max-height:60vh">
	<!-- striped style  OU TABELA ZEBRA-->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>Editar</th>
					<th>Excluir</th>
					<th>Pedido</th>
				</tr>
			</thead>

			<tbody>
				<tr>
				    <td>1</td>
				    <td>John Pate</td>
				    <td>51986607668</td>
				    <td>51986607668</td>
				</tr>
			</tbody>

		</table>

	</div>

	<div class="col-md-12 text-left">
		<div class="signup-form-container">
		<!-- form start -->
			<form role="form" id="register-form" autocomplete="off">
				<div class="form-header">
					<h3 class="form-title"><i class="fa fa-user"></i> Localizar Cliente</h3>
				</div>

				<div class="form-body">
				<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
					<div class="row">
						<div class="form-group col-md-6">
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

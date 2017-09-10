<div class="col-md-10" id="div_cadastrar" hidden>
		<div class="signup-form-container">
		<!-- form start -->
		<form role="form" id="cadastroCliente" onSubmit="return false;" autocomplete="off">
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
							<input name="nomeCli" id="nomeCli"type="text" class="form-control" placeholder="Nome">
				   		</div>
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
					</div>
						<div class="form-group col-md-4">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-home"></span>
							</div>
							<input name="numero" type="number" class="form-control" placeholder="Numero">
						</div>                  
					</div>
						<div class="form-group col-md-6">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</div>
							<input name="cep" type="number" class="form-control" placeholder="Cep">
						</div>                  
					</div>
						<div class="form-group col-md-6">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-map-marker"></span>
							</div>
							<input name="ref" type="text" class="form-control" placeholder="Ponto de Referencia">
						</div>                  
					</div>
				</div>
				<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
				<div class="row">
					<div class="form-group col-md-6">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<input id="telCli" name="telCli" type="number" class="form-control" placeholder="Telefone">
						</div>                
					</div>
				    
					<div class="form-group col-md-6">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-phone"></span>
							</div>
							<input id="celCli" name="celCli" type="number" class="form-control" placeholder="Celular">
						</div>                  
			   		</div>
		     		</div>
				<!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--->
			</div>
			<div class="form-footer">
				<button class="btn btn-lg btn-info" id="salvarCli" onClick="salvarCliente()">
					<span class="glyphicon glyphicon-floppy-disk"></span> Salvar
				</button>
			</div>
		</form>
		</div>
	</div>
<script>
function salvarCliente(){
	if(!$("#nomeCli").val()){
		alert("Nome não inserido!")
		return false;
	}

	if(!$("#telCli").val() && !$("#celCli").val()){
		alert("Nenhum telefone inserido!")
		return false;
	}
   $.ajax({
	 type: "POST",
	 url: 'dao/cliente.php',
	 data: "nome="+$("#nomeCli").val()+"&telefone="+$("#telCli").val()+"&celular="+$("#celCli").val(),
	 success: function(data) {
		alert(data);
		$("#nomeCli").val("");
		$("#foneCli").val("");
		$("celCli").val("");
	 }
   });
}
</script>

function cadastrarCliente(cliente){
   $.ajax({
	 type: "POST",
	 url: '../pdo/cliente.php',
	 data: "nome="+cliente.nome+"&telefone="+cliente.telefone+"&celular="+cliente.celular,
	 success: function(data) {
		alert(data);
	 }
   });
}

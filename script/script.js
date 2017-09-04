$(document).ready(
	function(){






		//menu

		function swapDivs(div){
			$("#div_localizar").hide();
			$("#div_pdv").hide();
			$("#div_cadastrar").hide();
			$("#div_cadproduto").hide();
			$("#"+div).show();
		}


		function swapMenuItens(){
			$("#sideMenuItens li").each(
				function(){
					$(this).removeClass("menuSelected");
				}		
			);
		}

		$("#sideMenuItens li").click(
			function(){
				swapMenuItens();
				$(this).addClass("menuSelected");
				swapDivs($(this).attr("value"));
			}

		);












		//venda
		function addSelect(prod){
			$(".produtoVenda").each(function(){
				$(this).removeClass("selecionado");
			});
			$(prod).addClass("selecionado");
		}

		$(".produtoVenda").click(function(){
			addSelect(this);
		});














	}

);




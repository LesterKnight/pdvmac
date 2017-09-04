$(document).ready(
	function(){






		//menu
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

		function swapDivs(div){
			$("#div_localizar").hide();
			$("#div_pdv").hide();
			$("#"+div).show();
		}


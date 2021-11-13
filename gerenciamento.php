<?php
	
	session_start();
	if(isset($_SESSION["numlogin"])){

		$n1=$_GET["num"];
		$n2=$_SESSION["numlogin"];
		if($n1 != $n2){

			echo "LOGIN NÃO EFETUADO";
			exit();
		}
	}else{

		echo "LOGIN NÃO EFETUADO";
			exit();
		
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Podolog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="jquery-3.1.1.min.js"></script>
	<script>

		//função para mauseover
		
		$(document).ready(function(){

			$("#menub1, #menub2, #menub3, #menub4, #menub5, #menub6").css("visibility","hidden");
			$("#menua1").mouseover(function() {
					$("#menub1").css("visibility","visible");
					$("#menub2").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
					$("#menub5").css("visibility","hidden");
					$("#menub6").css("visibility","hidden");

			});
			
			$("#menua2").mouseover(function(){
					$("#menub2").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
					$("#menub5").css("visibility","hidden");
					$("#menub6").css("visibility","hidden");
			});
			
			$("#menua3").mouseover(function(){
					$("#menub3").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
					$("#menub5").css("visibility","hidden");
					$("#menub6").css("visibility","hidden");
			});
			
			$("#menua4").mouseover(function(){
					$("#menub4").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub5").css("visibility","hidden");
					$("#menub6").css("visibility","hidden");
			});
			
			$("#menua5").mouseover(function(){
					$("#menub5").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
					$("#menub6").css("visibility","hidden");
			});
			
			$("#menua6").mouseover(function(){
					$("#menub6").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub5").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
			});



			

		});


	</script>

</head>
<body>

	<header>
		
		<?php

			include "topo.php";

		?>

	</header>

	

	<section id="">

		


	</section>

	<nav id="navgerenciamento">
		
		<div>

			<button id="menua1" class="btgerenciamento">Vendas</button>
			<div id="menub1" class="menub">
				<a href="#" target="_self">Venda</a>
				<a href="#" target="_self">Consultar</a>
				<a href="#" target="_self">Editar</a>
			</div>
		</div>

		<div>

			<button id="menua2" class="btgerenciamento">Clientes</button>
			<div id="menub2" class="menub">
				<a href="#" target="_self">Cadastrar</a>
				<a href="#" target="_self">Consultar</a>
			</div>
		</div>

		<div>

			<button id="menua3" class="btgerenciamento">Agenda</button>
			<div id="menub3" class="menub">
				<a href="#" target="_self">Agendar</a>
				<a href="#" target="_self">Consultar</a>
			</div>
		</div>

		<div>

			<button id="menua4" class="btgerenciamento">Financeiro</button>
			<div id="menub4" class="menub">
				<a href="#" target="_self">Receber</a>
				<a href="#" target="_self">Pagar</a>
				
			</div>
		</div>

		<div>

			<button id="menua5" class="btgerenciamento">Colaboradores</button>
			<div id="menub5" class="menub">
				<a href="novousuario.php?num=<?php echo $n1; ?>" target="_self">Cadastrar</a>
				<a href="#" target="_self">Consultar</a>
			</div>
		</div>

		<div>

			<button id="menua6" class="btgerenciamento">Logoff</button>
			<div id="menub6" class="menub">
				<a href="#" target="_self">Sair</a>
				
			</div>
		</div>

		




	</nav>

	


		

	


	

</body>
</html>
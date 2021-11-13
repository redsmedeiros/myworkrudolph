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
	<
</head>

<body>

	<header>
		
		<?php

			include "topo.php";

		?>

	</header>


	<nav id="navgerenciamento" class="navbar navbar-light bg-faded" style="background-color: #ABC; border-color: #000; height: 100%;">
		
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
				<a href="#" target="_self">Cadastrar</a>
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

	<section id="main">

			<a href="gerenciamento.php?num=<?php echo $n1; ?>" target="_self" class="btmenu">Voltar</a>

			<h1>Cadastro de Colaboradores</h1>


	</section>

	


		

	


	

</body>
</html>
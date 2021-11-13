<!DOCTYPE html>
<html>
<head>
	<title>Podolog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<header>
		
		<?php

			include "topo.php";

		?>

	</header>

	<section id="main">

		<?php

		// rotina de conexão com o banco

			try {
				
				$con = mysqli_connect("localhost", "root", "", "podolog");

			} catch (Exception $e) {
				
				echo "Erro de conexão";
			}
			

			//verificar se o submit foi pressionado

			if(isset($_POST["f_logar"])){

				// pegar valores para variáveis

				$usuario = addslashes($_POST["f_user"]);
				$senha = addslashes($_POST["f_senha"]);

				// rotina SQL

				$sql= "SELECT * FROM tb_colaboradores WHERE username='$usuario' AND senha='$senha'";

				$comando = mysqli_query($con, $sql);
				$res = mysqli_fetch_array($comando);

				    // verificar se senha e usuario já existem

				if($res == 0){

						echo "<p id='lgErro'>LOGIN INCORRETO</P>";

						// Rotina de validação do login
					}else{

						$chave1 ="abcdefghijklmnopqrstuvxz";
						$chave2 = "ABCDEFGHIJKLMNOPQRSTUVXZ";
						$chave3 = "1234567890";

						//chave com a string geral com a função de embaralhamento

						$chavemain = str_shuffle($chave1.$chave2.$chave3);

						// retorno do tamanho da string

						$tamanho = strlen($chavemain);
						$num = "";

						// limitador da quantidade

						$quantidade = rand(20,50);

						// rotina criação da chave

						for($i; $i < $quantidade; $i++){

								$pos = rand(0,$tamanho);
								$num.= substr($chavemain, $pos, 1);


						}

						session_start();
						$_SESSION['numlogin'] = $num;
						$_SESSION['username'] = $user;
						$_SESSION['acesso'] = $res['acesso'];
						header("location:gerenciamento.php?num=$num");
						
				}
			}

			mysqli_close($con);
		?>


		<div id="divlogin">
		<h1 id="h1id">Entrar</h1>
		<form action="#" method="post" name="f_login" id="f_loginid">
			
			<input type="text" name="f_user" class="in_login" placeholder="Usuário">
			<input type="password" name="f_senha" class="in_login" placeholder="Senha">
			<input type="submit" name="f_logar" value="ACESSAR" class="in_login" id="butonsenha">
		</dir>
			




		</form>

	</section>

	
	
	

	

</body>
</html>
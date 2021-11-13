<?php

//criar objeto de conexao
try{

	$pdo = new PDO("mysql:dbname=podolog; host=localhost", "root", ""); //dbname, host, usuario e senha
	
}catch (PDOException $e){
	
	echo "Erro com Banco de Dados: ". $e->getMessage();

}catch (Exception $e){

	echo "Erro: ". $e->getMessage();

}



?>

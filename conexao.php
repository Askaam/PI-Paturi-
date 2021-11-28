<?php

try{
	//Classe de conexao utilizando a PDO ou seja, PHP Data Objects que um módulo de padronização de conexão 
	$pdo = new PDO ('mysql:host=localhost;dbname=paturi;charset=utf8' , 'root' , '') ;//Nome do servidor, nome do banco de dados, usuario e senha
}
catch (PDOException $e){
	
	die ("Não foi possível estabelecer uma conexão, tente novamente mais tarde.");//Mensagem a ser exibida ao usário caso não haja conexão com o servidor
}
<?php

include '../../conexao.php'; //caminho do arquivo de conexão

$post=filter_input_array(INPUT_POST, FILTER_DEFAULT);//FILTER INPUT são funções do PHP, obtem a especifica variável externa pelo nome e opcionalmente a filtra.

$arquivo = $_FILES['arquivo'];
$destino = 'assets/img/'.$arquivo['name'];
move_uploaded_file($arquivo['tmp_name'], '../../'.$destino);

$Dados = array(

	//campo do banco recebe a variável do form HTML
	//post é metodo de envio de informações ocultas na URL
	'nome_cli'=> $post['nome'],	
	'desc_cli'=> $post['desc'],
	'altura_cli'=> $post['alt'],
	'comprimento_cli'=> $post['compri'],
	'largura_cli'=> $post['larg'],
	'volume_cli'=> $post['vol'],
	'peso_cli'=> $post['peso'],
	'qtdCaixa_cli'=> $post['qtd'],	
	);
	
$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'cliente';
$Create = "INSERT INTO {$Tabela} ({$Fields}, caminho_img_cli) VALUES ({$Places}, '$destino')";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
echo "<script>alert('Cliente cadastrado com sucesso!');window.location=\"../../adm/pages/forms/cadCli.php\";</script>";
//header('LOCATION: cadCli.php');
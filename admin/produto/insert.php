<?php

include '../../conexao.php'; //caminho do arquivo de conexão

$post=filter_input_array(INPUT_POST, FILTER_DEFAULT);//FILTER INPUT são funções do PHP, obtem a especifica variável externa pelo nome e opcionalmente a filtra.

$arquivo = $_FILES['arquivo'];
$destino = 'assets/img/'.$arquivo['name'];
move_uploaded_file($arquivo['tmp_name'], '../../'.$destino);

$Dados = array(

	//campo do banco recebe a variável do form HTML
	//post é metodo de envio de informações ocultas na URL
	'nome_pro'=> $post['nome'],	
	'desc_pro'=> $post['desc'],
	'altura_pro'=> $post['alt'],
	'comprimento_pro'=> $post['compri'],
	'largura_pro'=> $post['larg'],
	'volume_pro'=> $post['vol'],
	'peso_pro'=> $post['peso'],
	'qtdCaixa_pro'=> $post['qtd'],	
	);
	
$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'produto';
$Create = "INSERT INTO {$Tabela} ({$Fields}, caminho_img_pro) VALUES ({$Places}, '$destino')";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
echo "<script>alert('Produto cadastrado com sucesso!');window.location=\"../../adm/pages/forms/cadPro.php\";</script>";
//header('LOCATION: index.html');
<?php
//Conectar ao banco de dados
include_once("../../conexao.php");
//Criar script de alteração

if(isset($_POST['update']))
{
	$id_cli=$_POST['id_cli'];
	
	$nome_cli=$_POST['nome'];	
	$desc_cli=$_POST['desc'];
    $altura_cli=$_POST['alt'];
    $comprimento_cli=$_POST['compri'];	
	$largura_cli=$_POST['larg'];
	$volume_cli=$_POST['vol'];
	$peso_cli=$_POST['peso'];
	$qtdCaixa_cli=$_POST['qtd'];
	
		$sql="UPDATE cliente SET nome_cli=:nome, desc_cli=:desc, altura_cli=:alt, comprimento_cli=:compri, largura_cli=:larg, volume_cli=:vol, peso_cli=:peso, qtdCaixa_cli=:qtd WHERE id_cli=:id_cli";
		$query = $pdo->prepare($sql);
	
		$query->bindparam(':id_cli', $id_cli);
		$query->bindparam(':nome', $nome_cli);	
		$query->bindparam(':desc', $desc_cli);	
		$query->bindparam(':alt', $altura_cli);	
		$query->bindparam(':compri', $comprimento_cli);
		$query->bindparam(':larg', $largura_cli);				
		$query->bindparam(':vol', $volume_cli);				
		$query->bindparam(':peso', $peso_cli);				
		$query->bindparam(':qtd', $qtdCaixa_cli);									
		$query->execute();
	
		echo "<script>alert('O cliente foi alterado com sucesso!'); window.location=\"../../adm/pages/tables/listCli.php\";</script>";		

}
				

?>
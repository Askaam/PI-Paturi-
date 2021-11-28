<?php
//Conectar ao banco de dados
include_once("../../conexao.php");
//Criar script de alteração

if(isset($_POST['update']))
{
	$id_pro=$_POST['id_pro'];
	
	$nome_pro=$_POST['nome'];	
	$desc_pro=$_POST['desc'];
    $altura_pro=$_POST['alt'];
    $comprimento_pro=$_POST['compri'];	
	$largura_pro=$_POST['larg'];
	$volume_pro=$_POST['vol'];
	$peso_pro=$_POST['peso'];
	$qtdCaixa_pro=$_POST['qtd'];
	
		$sql="UPDATE produto SET nome_pro=:nome, desc_pro=:desc, altura_pro=:alt, comprimento_pro=:compri, largura_pro=:larg, volume_pro=:vol, peso_pro=:peso, qtdCaixa_pro=:qtd WHERE id_pro=:id_pro";
		$query = $pdo->prepare($sql);
	
		$query->bindparam(':id_pro', $id_pro);
		$query->bindparam(':nome', $nome_pro);	
		$query->bindparam(':desc', $desc_pro);	
		$query->bindparam(':alt', $altura_pro);	
		$query->bindparam(':compri', $comprimento_pro);
		$query->bindparam(':larg', $largura_pro);				
		$query->bindparam(':vol', $volume_pro);				
		$query->bindparam(':peso', $peso_pro);				
		$query->bindparam(':qtd', $qtdCaixa_pro);									
		$query->execute();
	
		echo "<script>alert('O produto foi alterado com sucesso!'); window.location=\"../../adm/pages/tables/listPro.php\";</script>";		

}
				

?>
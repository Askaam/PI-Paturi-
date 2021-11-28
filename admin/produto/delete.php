<title>DELETE</title>
<?php
include_once'../../conexao.php';
$id_pro=$_GET['id_pro'];
$SQL= "DELETE FROM produto WHERE id_pro= :id_pro";
$query=$pdo->prepare($SQL);
$query->execute(array(':id_pro'=>$id_pro));
echo "<script>alert('Os dados foram deletados com sucesso!');window.location=\"../../adm/pages/tables/listPro.php\";</script>";

?>
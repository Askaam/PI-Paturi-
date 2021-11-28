<title>DELETE</title>
<?php
include_once'../../conexao.php';
$id_cli=$_GET['id_cli'];
$SQL= "DELETE FROM cliente WHERE id_cli= :id_cli";
$query=$pdo->prepare($SQL);
$query->execute(array(':id_cli'=>$id_cli));
echo "<script>alert('Os dados foram deletados com sucesso!');window.location=\"../../adm/pages/tables/listCli.php\";</script>";

?>
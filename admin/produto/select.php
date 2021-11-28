<?php
include_once '../../conexao.php';

$result=$pdo->query("SELECT * FROM produto ORDER BY id_pro DESC");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SELECT</title>
</head>

<body>

<!--<center><button><a href="formcontratante.html"><img src="../images/Penguins.jpg" width="50" height="50" border="1"/></a>
</button></center>-->
<!--<input name="btnchamar" type="image" src="../images/Penguins.jpg" align="middle" width="100" height="100" hspace="50" vspace="50" border="1" />-->
<center><strong><a href="../produto/formProduto.html"><img src="../images/Penguins.jpg" width="100" height="100" border="0"></a>
</strong></center>
<table width="80%" border="1">
  <tr bgcolor="#00CCCC">
    <td>Nome</td>
    <td>Ambiente</td>
    <td>Preço</td>
    <td>Categoria</td>
  </tr>
  <?php
  while($row = $result->fetch(PDO::FETCH_ASSOC)){
  	echo "<tr>";
  	echo "<td>".$row['nome_pro']."</td>";
    echo "<td>".$row['id_amb']."</td>";
    echo "<td>".$row['preco_pro']."</td>";
    echo "<td>".$row['id_cat']."</td>";
	echo "<td><a href =\"update.php?id_pro=$row[id_pro]\">Editar</a> | <a href =\"delete.php?id_pro=$row[id_pro]\"onClick=\"return confirm('Você deseja exluir os dados?')\">Excluir</a></td>";
    }
  ?>
</table>

</body>
</html>
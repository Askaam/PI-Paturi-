<?php
// session_start() é por causa da sessão que será criada
session_start();

// Recebendo os dados do formulário
$key_adm = filter_input(INPUT_POST, 'key', FILTER_DEFAULT);
$_SESSION['id_adm'] = 0;

include '../conexao.php';

$sth = $pdo->prepare('SELECT * FROM adm WHERE key_adm = :key');
$sth->bindValue(":key", $key_adm);

$sth->execute();

while($row = $sth->fetch(PDO::FETCH_ASSOC)){
	$_SESSION['id_adm'] = $row['id_adm'];
}

if ($sth->rowCount() > 0):
    $linha = $sth->fetch(PDO::FETCH_ASSOC);
    //extract($linha);
    $_SESSION['Login']['key'] = $key_adm;
    header('LOCATION:home.php');
else:
    //header('LOCATION:loginAdm.php');
	echo "<script>alert('Login ou Senha incorretos!');window.location=\"../adm\";</script>";
endif;
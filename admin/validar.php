<?php
// session_start() é por causa da sessão que será criada
session_start();

// Recebendo os dados do formulário
$login_adm = filter_input(INPUT_POST, 'login', FILTER_DEFAULT);
$senha_adm = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

include '../conexao.php';

$sth = $pdo->prepare('SELECT * FROM administrador WHERE login_adm = :login_adm');
$sth->bindValue(":login_adm", $login_adm);
//$sth->bindValue(":senha", $senha);
$sth->execute();

if ($sth->rowCount() > 0):
    $linha = $sth->fetch(PDO::FETCH_ASSOC);
    extract($linha);
    $_SESSION['Login']['usuario'] = $login_adm;
    $_SESSION['Login']['123'] = $senha_adm;
    header('LOCATION:menu.php');
else:
    //header('LOCATION:loginAdm.php');
	echo "<script>alert('Login ou Senha incorretos!');window.location=\"login.php\";</script>";
endif;
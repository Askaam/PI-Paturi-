<?php
// session_start() starta a sessão
session_start();
unset($_SESSION['id_adm']);
// session_destroy() encerra a sessao
session_destroy();
header("Location:../adm");
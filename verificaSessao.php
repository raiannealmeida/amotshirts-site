<?php
// verificando se existe a sessão, se não houver, limpa o campo $login, limpa o campo $senha redireciona para a página index.html

session_start();
if((!isset ($_SESSION['email_cliente']) == true) and (!isset($_SESSION['senha_cliente'])==true)){

	unset($_SESSION['email_cliente']);
	unset($_SESSION['senha_cliente']);
	header('location:index.php');
}
$logado = $_SESSION['email_cliente'];

?>
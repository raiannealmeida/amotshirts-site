<?php 

//inicia a sessão
session_start();
//recupera os dados do formulário
$email_cliente = trim($_POST['email_cliente']);
$senha_cliente = trim($_POST['senha_cliente']);

//conectar ao banco de dados 
require_once'connect.php';

//a variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = "SELECT * FROM cliente WHERE email_cliente = '$email_cliente' AND senha_cliente = '$senha_cliente'";
//logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja, se ela estiver encontrado algum registro idêntico ao seu valor, será igual a 1, se não tiver registros retornará 0. Dependendo do resultado ele redirecionará para a pagina inicio.php ou para a página do formulário de login index.html para tentar novamente.
$ab = mysqli_query($con, $result);
$nome_cliente = mysqli_fetch_array($ab);



	if(mysqli_num_rows(mysqli_query($con, $result))>0){
		$_SESSION['email_cliente'] = $email_cliente;
		$_SESSION['senha_cliente'] = $senha_cliente;
		$_SESSION['nome_cliente'] = $nome_cliente['nome_cliente'];
		$_SESSION['tipo'] = "cliente";
		header('location:inicio_cli.php');// localização da pagina inicial  do cliente
	}else{	
		unset($_SESSION['email_cliente']);
		unset($_SESSION['senha_cliente']);
		//header('location:index.html');
		echo "<script>alert('Email e/ou Senha incorretos');</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';


}


?>
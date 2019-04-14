<?php 

echo "<meta charset='UTF-8' />";
    require_once 'connect.php';

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$sexo_cliente = $_POST['sexo_cliente']; 
$nasc_cliente = $_POST['nasc_cliente'];
$email_cliente = $_POST['email_cliente'];
$senha_cliente = $_POST['senha_cliente'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$checarDados =  "select * from cliente where cpf_cliente = '$cpf_cliente' or email_cliente = '$email_cliente'";


	if(mysqli_num_rows(mysqli_query($con, $checarDados))>0){
        echo "<script>alert('CPF ou Email já está cadastro'); history.back();</script>";
    


    }else{
        
	       	$sql = "INSERT INTO cliente (nome_cliente, cpf_cliente, sexo_cliente, nasc_cliente, email_cliente, senha_cliente, cidade, estado) VALUES ('$nome_cliente', '$cpf_cliente', '$sexo_cliente', '$nasc_cliente', '$email_cliente', '$senha_cliente', '$cidade', '$estado')";

	       	mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
	        echo "<script>alert('Cadastro realizado com sucesso');</script>";
	        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';
        
   		
    }
//Gravando no banco de dados !

//conectando com o localhost - mysql

 /*if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";


$sql = mysql_query("INSERT INTO cliente (nome_cliente, cpf_cliente, sexo_cliente, nasc_cliente, email_cliente, senha_cliente, cidade, estado) VALUES ('$nome_cliente', '$cpf_cliente', '$sexo_cliente', '$nasc_cliente', '$email_cliente', '$senha_cliente', '$cidade', '$estado')");

mysql_query($con,$sql) or trigger_error(mysqli_error()."".$sql);

echo "Seu cadastro foi realizado com sucesso!";
*/

?> 
</body>
</html>

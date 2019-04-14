⁠⁠⁠<?php 
echo "<meta charset='UTF-8' />";
    require_once 'connect.php';

   
    $nome_cliente = trim($_POST['nome_cliente']);
    $nasc_cliente = trim($_POST['nasc_cliente']);
    $sexo_cliente = trim($_POST['sexo_cliente']);
    $email_cliente = trim($_POST['email_cliente']);
    $senha_cliente = trim($_POST['senha_cliente']);
    $cidade = trim($_POST['cidade']);
    $estado = trim($_POST['estado']);
   
    


    
        
            $sql = "update cliente set nome_cliente ='$nome_cliente', nasc_cliente = '$nasc_cliente', sexo_cliente = '$sexo_cliente', email_cliente = '$email_cliente', senha_cliente = '$senha_cliente', cidade = '$cidade', estado = '$estado' where email_cliente = '$email_cliente' ";

            mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
            echo "<script>alert('Cadastro Atualizado com Sucesso!');</script>";
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=dadoscliente.php">';
        
        
  




?>
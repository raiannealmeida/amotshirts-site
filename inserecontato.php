<?php
    require "conn.php";
    $email=$_REQUEST['email'];
    $senha=$_REQUEST['senha'];
    $sql="INSERT INTO login_cliente(email, senha)
          values('$email','$senha')";
	//echo $sql;
    $cmd = mysqli_query($connect, $sql);
 
    include("disconn.php");
  header("Location: login.html");
?>
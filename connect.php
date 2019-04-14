<?php 
  $con = new mysqli("localhost", "root", "", "amo_tshirts");

  if($con->connect_error){
    die("Erro de Conexão com o Banco!" . $con->connect_error);
  }

  mysqli_query($con, "SET NAMES 'utf8'");
  mysqli_query($con, 'SET character_set_connection=utf8');
  mysqli_query($con, 'SET character_set_client=utf8');
  mysqli_query($con, 'SET character_set_results=utf8');


?>
<?php
  //Mude aqui sua senha
  $host ="localhost";
  $user ="root";
  $pass ="";
  $bd ="amo_tshirts";
 
  $connect =mysqli_connect ($host,$user,$pass, $bd);
  if (!$connect){
    echo "<div class ='alert alert-danger text-center'>
    <H3>ATENÇÃO</H3>
    Não foi possível conectar ao Banco de Dados! <br>
    Erro:
    ".mysqli_connect_error()."</div>".PHP_EOL;
   }
    
   if (!(mysqli_set_charset ($connect, "utf8"))){
    echo "Problemas ao carregar charset utf8. Erro: ".mysqli_error($connect);
    exit();
   }
?>
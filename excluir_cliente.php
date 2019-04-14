<?php
require 'connect.php';
$cpf_cliente = $_GET['cpf_cliente'];
$deletar = "DELETE FROM cliente WHERE cpf_cliente='$cpf_cliente'";
$deletando = mysqli_query ( $con, $deletar); 


echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=clientes.php">';
//header("Location: clientes.php");
?>
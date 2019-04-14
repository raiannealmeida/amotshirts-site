<?php
require 'connect.php';
$cod = $_GET['cod'];
$deletar = "DELETE FROM produto WHERE cod='$cod'";
$deletando = mysqli_query ( $con, $deletar); 


echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=lista_pro.php">';
//header("Location: lista_pr.php");
?>
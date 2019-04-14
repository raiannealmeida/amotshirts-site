<?php
	echo "<meta charset='UTF-8'/>";
	

	if (!($_SESSION['tipo'] == "Raianne")) {
		echo "<script>alert('OPERAÇÃO NÃO PERMITIDA'); history.back();</script>";
   
	} 
	
	
	

?>
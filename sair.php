<?php
  session_start();
  session_destroy();
	echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
?>
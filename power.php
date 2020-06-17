<?php
exec("python /var/www/html/reboot.py");

	header("Location:home.php");
	exit;
 ?>

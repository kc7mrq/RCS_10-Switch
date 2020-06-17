<?php
// Executes the GPIO command to read the three pins. Issues variables to the pins.
// Echos the status of each pin to determine which antenna selected in BDC format.
         shell_exec("/usr/local/bin/gpio -g mode 26 out");
	 exec ( "gpio -g toggle 26", $status26 );

header("Location:home.php");
exit;
?>

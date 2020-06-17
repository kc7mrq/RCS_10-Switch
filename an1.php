<?php
         $gpio_7 = shell_exec("/usr/local/bin/gpio -g write 4 0");
         $gpio_3 = shell_exec("/usr/local/bin/gpio -g write 22 0");
         $gpio_22 = shell_exec("/usr/local/bin/gpio -g write 6 0");

header("Location:home.php");
exit;
?>

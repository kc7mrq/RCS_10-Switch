<?php
         $setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
         $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
         $setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");

         if(isset($_GET['ant1'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 0");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");
                 echo "<button class='button button2'> ANTENNA 1 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant2'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");
                 echo "<button class='button button2'> ANTENNA 2 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant3'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 0");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 1");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");
                 echo "<button class='button button2'> ANTENNA 3 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant4'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 1");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");
                 echo "<button class='button button2'> ANTENNA 4 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant5'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 0");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 1");
                 echo "<button class='button button2'> ANTENNA 5 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant6'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 1");
                 echo "<button class='button button2'> ANTENNA 6 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant7'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 0");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 1");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 1");
                 echo "<button class='button button2'> ANTENNA 7 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant8'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 1");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 1");
                 //echo "Antenna 8 is Selected.";
                 echo "<button class='button button2'> ANTENNA 8 ACTIVELY SELECTED</button>";
         }
        else if(isset($_GET['reb'])){
                 exec("python /var/www/html/reboot.py");
                 echo "<span style='color:white';>Reboot in progress.";
        }
        else if(isset($_GET['sht'])){
                 exec("python /var/www/html/shutdown.py");
                 echo "<span style='color:white';>Shutdown commenced";
        }

?>

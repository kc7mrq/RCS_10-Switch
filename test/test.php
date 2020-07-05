 <html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <link rel="stylesheet" href="styles.css">
 <title>Relay Control</title>
 </head>
         <body>
         <H2>RELAY 1 Control:</H2>
         <form method="get" action="test.php">
                 <input type="submit" value="ON" name="on">
                 <input type="submit" value="OFF" name="off">
         </form>
         <h2>RELAY 2 Control:</h2>
         <form method="get" action="test.php">
                 <input type="submit" value="ON" name="on2">
                 <input type="submit" value="OFF" name="off2">
         </form>
         <h2>RELAY 3  Control:</h2>
         <form method="get" action="test.php">
                 <input type="submit" value="ON" name="on3">
                 <input type="submit" value="OFF" name="off3">
         </form>

<form action="test.php">
  <select name="ant">
    <option value="ant1">Antenna 1</option>
    <option value="ant2">Antenna 2</option>
    <option value="ant3">Antenna 3</option>
    <option value="ant4">Antenna 4</option>
    <option value="ant5">Antenna 5</option>
    <option value="ant6">Antenna 6</option>
    <option value="ant7">Antenna 8</option>
    <option value="ant8">Antenna 8</option>
  </select>
  <br><br>
  <input type="submit">
</form>
<?php
         $setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 echo "Relay 1 is on";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 0");
                 echo "Relay 1 is off";
         }

         $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
         if(isset($_GET['on2'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
                 echo "Relay 2 is on";
         }
         else if(isset($_GET['off2'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 echo "Relay 2 is off";
         }

         $setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
         if(isset($_GET['on3'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 26 1");
                 echo "Relay 3 is on";
         }
         else if(isset($_GET['off3'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 0");
                 echo "Relay 3 is off";
         }
         ?>
         </body>
 </html>

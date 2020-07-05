<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <!DOCTYPE html>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="test1.php">Antenna Selector</a></li>
  <li><a href="power.php">Power</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<!--
Form submission code that creates the button and creates the variables an1 - ant8
-->
<br>
<h2>Antenna Control:</H2>
<a href="an1.php" class="button2">Antenna 1</a>

         <form method="get" action="#">
                 <input type="submit" value="Antenna 1" name="ant1" class="button button2">
                 <input type="submit" value="Antenna 2" name="ant2" class="button button1">
                 <input type="submit" value="Antenna 3" name="ant3" class="button button1">
                 <input type="submit" value="Antenna 4" name="ant4" class="button button1">
                 <input type="submit" value="Antenna 5" name="ant5" class="button button1">
                 <input type="submit" value="Antenna 6" name="ant6" class="button button1">
                 <input type="submit" value="Antenna 7" name="ant7" class="button button1">
                 <input type="submit" value="Antenna 8" name="ant8" class="button button1">
         </form>
<br>
<br>
<?php
         $setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
         $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
         $setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");

         $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 0");
         $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
         $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");

?>

         </body>
 </html>

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

<H1>Relay Status</H1>
<?php
// Executes the GPIO command to read the three pins. Issues variables to the pins.
// Echos the status of each pin to determine which antenna selected in BDC format.
  exec ( "gpio -g read 20", $status20 );
  exec ( "gpio -g read 21", $status21 );
  exec ( "gpio -g read 26", $status26 );
//  echo $status20[0] ;
//  echo $status21[0] ;
//  echo $status26[0] ;
//echo "<br>";
// IF ELSEIF statements to determine which antenna is selected when submitting 
// the selection.

if ($status20[0] == "0" && $status21[0] == "0" && $status26[0] == "0") {
	//echo "<span style='color:white';>Antenna 1 is initially set.";
        echo "<button class='button'> Antenna 1 Initially Set</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "0" && $status26[0] == "0") {
        //echo "<span style='color:white';>Antenna 2 is currently selected.";
	echo "<button class='button'> Antenna 2 Initially Set</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "1" && $status26[0] == "0") {
        //echo "<span style='color:white';>Antenna 3 is currently selected.";
	echo "<button class='button'> Antenna 3 Initially Set</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "1" && $status26[0] == "0") {
        //echo "<span style='color:white';>Antenna 4 is currently selected.";
	echo "<button class='button'> Antenna 4 Initially Set</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "0" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 5 is currently selected.";
	echo "<button class='button'> Antenna 5 Initially Set</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "0" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 6 is currently selected.";
	echo "<button class='button'> Antenna 6 Initially Set</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "1" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 7 is currently selected.";
	echo "<button class='button'> Antenna 7 Initially Set</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "1" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 8 is currently selected.";
	echo "<button class='button'> Antenna 8 Initially Set</button>";
}

?>
<!--
Form submission code that creates the button and creates the variables an1 - ant8
-->
<br>
<h2>Antenna Control:</H2>
<a href="an1.php" class="button2">Antenna 1</a>
<a href="an1.php" class="button3">Antenna 2</a>
<a href="an1.php" class="button3">Antenna 3</a>
<a href="an1.php" class="button3">Antenna 4</a>
<a href="an1.php" class="button3">Antenna 5</a>
<a href="an1.php" class="button3">Antenna 6</a>
<a href="an1.php" class="button3">Antenna 7</a>
<a href="an1.php" class="button3">Antenna 8</a>
<input type="button" class="button2" name="ant5" value="Input Button">

         <form method="get" action="test1.php">
                 <input type="submit" value="Antenna 1" name="ant1" class="button button1">
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
<!-- <H2>Remote Shutdown and Reboot:</H2>
	<form method="get" action="test1.php">
                 <input type="submit" value="Reboot" name="reb">
                 <input type="submit" value="Shutdown" name="sht">
         </form>
<-->
<?php
         //$setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
         //$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
         //$setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");

         if(isset($_GET['ant1'])){
                 $gpio_20 = exec("/usr/local/bin/gpio -g write 20 0");
                 $gpio_21 = exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = exec("/usr/local/bin/gpio -g write 26 0");
		 echo "<button class='button2'> ANTENNA 1 ACTIVELY SELECTED</button>";
         }
         else if(isset($_GET['ant2'])){
                 $gpio_20 = shell_exec("/usr/local/bin/gpio -g write 20 1");
                 $gpio_21 = shell_exec("/usr/local/bin/gpio -g write 21 0");
                 $gpio_26 = shell_exec("/usr/local/bin/gpio -g write 26 0");
		 echo "<button class='button2'> ANTENNA 2 ACTIVELY SELECTED</button>";
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

         </body>
 </html>

<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <!DOCTYPE html>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="test1.php">Relay Status</a></li>
  <li><a href="power.php">Power</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<H1>Relay Status</H1>

<?php
// Executes the GPIO command to read the three pins. Issues variables to the pins.
// Echos the status of each pin to determine which antenna selected in BDC format.
         shell_exec("/usr/local/bin/gpio -g mode 7 out");
         shell_exec("/usr/local/bin/gpio -g mode 3 out");
         shell_exec("/usr/local/bin/gpio -g mode 22 out");
  exec ( "gpio -g read 7", $status7 );
  exec ( "gpio -g read 3", $status3 );
  exec ( "gpio -g read 22", $status22 );
//  echo $status20[0] ;
//  echo $status21[0] ;
//  echo $status26[0] ;
//echo "<br>";
// IF ELSEIF statements to determine which antenna is selected when submitting 
// the selection.

if ($status20[0] == "0" && $status21[0] == "0" && $status26[0] == "0") {
	//echo "<span style='color:white';>Hexx Beam is initially set.";
        echo "<button class= button3> Hexx Beam Active</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "0" && $status26[0] == "0") {
        //echo "<span style='color:white';>40m EFHW is currently selected.";
	echo "<button class= button3> 40m EFHW Active</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "1" && $status26[0] == "0") {
        //echo "<span style='color:white';>Antenna 3 is currently selected.";
	echo "<button class= button3> Antenna 3 Active</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "1" && $status26[0] == "0") {
        //echo "<span style='color:white';>Antenna 4 is currently selected.";
	echo "<button class= button3> Antenna 4 Active</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "0" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 5 is currently selected.";
	echo "<button class= button3> Antenna 5 Active</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "0" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 6 is currently selected.";
	echo "<button class= button3> Antenna 6 Active</button>";
}

elseif ($status20[0] == "0" && $status21[0] == "1" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 7 is currently selected.";
	echo "<button class= button3> Antenna 7 Active</button>";
}

elseif ($status20[0] == "1" && $status21[0] == "1" && $status26[0] == "1") {
        //echo "<span style='color:white';>Antenna 8 is currently selected.";
	echo "<button class='button'> Antenna 8 Active</button>";
}

?>
<!--
Form submission code that creates the button and creates the variables an1 - ant8
-->
<br>
<h2>Antenna Control:</H2>
<a href="an1.php" class="button3">Hexx Beam</a>
<a href="an2.php" class="button3">40m EFHW</a>
<a href="an3.php" class="button3">Antenna 3</a>
<a href="an4.php" class="button3">Antenna 4</a>
<a href="an5.php" class="button3">Antenna 5</a>
<a href="an6.php" class="button3">Antenna 6</a>
<a href="an7.php" class="button3">Antenna 7</a>
<a href="an8.php" class="button3">Antenna 8</a>
         </body>
 </html>

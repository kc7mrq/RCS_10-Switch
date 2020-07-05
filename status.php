<?php
include('config.php');
echo "<H1>Station Status</H1>";

// Executes the GPIO command to read the three pins. Issues variables to the pins.
         shell_exec("/usr/local/bin/gpio -g mode 4 out");
         shell_exec("/usr/local/bin/gpio -g mode 22 out");
         shell_exec("/usr/local/bin/gpio -g mode 6 out");
         shell_exec("/usr/local/bin/gpio -g mode 26 out");
  exec ( "gpio -g read 4", $status4 );
  exec ( "gpio -g read 22", $status22 );
  exec ( "gpio -g read 6", $status6 );
  exec ( "gpio -g read 26", $status26 );
  exec ( "python3 amp_status.py", $stby);
  exec ( "python3 fl.py", $fl);

// Echos the status of each pin to determine which antenna selected in BDC format.
//  echo $stby[0];
//  echo $status4[0] ;
//  echo $status22[0] ;
//  echo $status6[0] ;
//  echo "<br>";

// IF ELSEIF statements to determine which antenna is selected when submitting
// the selection.
if ($status4[0] == "0" && $status22[0] == "0" && $status6[0] == "0") {
        //echo "<span style='color:white';>Hexx Beam is initially set.";
        echo "<button class= button3>$an1 Active</button>";
}

elseif ($status4[0] == "1" && $status22[0] == "0" && $status6[0] == "0") {
        //echo "<span style='color:white';>40m EFHW is currently selected.";
        echo "<button class= button3>$an2 Active</button>";
}

elseif ($status4[0] == "0" && $status22[0] == "1" && $status6[0] == "0") {
        //echo "<span style='color:white';>Antenna 3 is currently selected.";
        echo "<button class= button3>$an3 Active</button>";
}

elseif ($status4[0] == "1" && $status22[0] == "1" && $status6[0] == "0") {
        //echo "<span style='color:white';>Antenna 4 is currently selected.";
        echo "<button class= button3>$an4 Active</button>";
}

elseif ($status4[0] == "0" && $status22[0] == "0" && $status6[0] == "1") {
        //echo "<span style='color:white';>Antenna 5 is currently selected.";
        echo "<button class= button3>$an5 Active</button>";
}

elseif ($status4[0] == "1" && $status22[0] == "0" && $status6[0] == "1") {
        //echo "<span style='color:white';>Antenna 6 is currently selected.";
        echo "<button class= button3>$an6 Active</button>";
}

elseif ($status4[0] == "0" && $status22[0] == "1" && $status6[0] == "1") {
        //echo "<span style='color:white';>Antenna 7 is currently selected.";
        echo "<button class= button3>$an7 Active</button>";
}

elseif ($status4[0] == "1" && $status22[0] == "1" && $status6[0] == "1") {
        //echo "<span style='color:white';>Antenna 8 is currently selected.";
        echo "<button class='button3'>$an8 Active</button>";
}

if ($status26[0] == "0") {
        //echo "<span style='color:white';>Hexx Beam is initially set.";
        echo "<button class= button onclick= location.href='flex.php'>Radio in Standby</button>";
}

elseif ($status26[0] == "1") {
       // echo "<a href='flex.php' class='button3'>Flex Radio Operational</a>";
          echo "<button class= button3 onclick= location.href='flex.php'>Radio Operational</button>";
}
if ($stby[0] == "b'^OS0;'") {
        echo "<button class= button2> Amp in Standby</button>";
 }
 elseif ($stby[0] == "b'^OS1;'") {
        echo "<button class= button3> Amp Active</button>";
}
else {
	echo "<button class= button> Amp Powered Off</button>";
}
if ($fl[0] == "b'^FL00;'") {
        echo "<button class= button3>Fault Cleared</button>";
}
else {
	echo "<button class= button>Fault Detected</button>";
}
?>

<?php
$an1 = "dipole\n";
$an2 = "vertical\n";
$an3 = "beam\n";
$an4 = "quad\n";

$myfile = fopen("config1.php", "w") or die("Unable to open file!");
fwrite($myfile, $an1);
fwrite($myfile, $an2);
fwrite($myfile, $an3);
fwrite($myfile, $an4);
fclose($myfile);
?>

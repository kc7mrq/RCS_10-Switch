<?php
$myfile = fopen("antennas.txt", "w") or die("Unable to open file!");
//$txt = "John Doe\n";
fwrite($myfile, $prt1);
//$txt = "Jane Doe\n";
fwrite($myfile, $prt1);
fclose($myfile);
?>

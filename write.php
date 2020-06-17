<?php
$myfile = fopen("config.php", "w") or die("Unable to open file!");

echo fwrite($myfile,"<?php\n");
echo fwrite($myfile,'$an1="');
fwrite($myfile,$_POST["an1"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an2="');
fwrite($myfile,$_POST["an2"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an3="');
fwrite($myfile,$_POST["an3"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an4="');
fwrite($myfile,$_POST["an4"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an5="');
fwrite($myfile,$_POST["an5"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an6="');
fwrite($myfile,$_POST["an6"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an7="');
fwrite($myfile,$_POST["an7"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,'$an8="');
fwrite($myfile,$_POST["an8"]);
echo fwrite($myfile,'";'.PHP_EOL);
echo fwrite($myfile,"?>\n");
fclose($myfile);


header("Location:home.php");
exit;
?>

<?php
exec("python /var/www/html/shutdown.py");

        header("Location:home.php");
        exit;
 ?>

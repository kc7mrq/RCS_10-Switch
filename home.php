<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <!DOCTYPE html>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include("menu.html");?>
<div class="row">
   <div class="column">
   <?php include("status.php");?>
   </div>

   <div=class="column">
   <?php include("amp_ctl.php");?>
   </div>
</div>

<br>

<h2>Antenna Control:</H2>
<div class="row">
  <div class="column">
<?php include ("rcs10_ctl.php");?>
  </div>
  <div class="column">
<?php include ("rcs1_ctl.php");?>
  </div>
</div>
</body>
</html>

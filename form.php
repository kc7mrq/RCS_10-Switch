<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <!DOCTYPE html>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include("menu.html");
      include("config.php");?>


<h2>Antenna Names:</H2>
<form action="write.php" method="post">
  <div class=row>
  <div class=column>
  <label for="an1">Port 1:</label><br>
  <input type="text" id="an1" value="<?php echo htmlspecialchars($an1); ?>" name="an1"><br><br>
  <label for="an2">Port 2:</label><br>
  <input type="text" id="an2" value="<?php echo htmlspecialchars($an2); ?>" name="an2"><br><br>
  <label for="an3">Port 3:</label><br>
  <input type="text" id="an3" value="<?php echo htmlspecialchars($an3); ?>" name="an3"><br><br>
  <label for="an4">Port 4:</label><br>
  <input type="text" id="an4" value="<?php echo htmlspecialchars($an4); ?>" name="an4"><br><br>
  </div>
  <div class=column>
  <label for="an5">Port 5:</label><br>
  <input type="text" id="an5" value="<?php echo htmlspecialchars($an5); ?>" name="an5"><br><br>
  <label for="an6">Port 6:</label><br>
  <input type="text" id="an6" value="<?php echo htmlspecialchars($an6); ?>" name="an6"><br><br>
  <label for="an7">Port 7:</label><br>
  <input type="text" id="an7" value="<?php echo htmlspecialchars($an7); ?>" name="an7"><br><br>
  <label for="an8">Port 8:</label><br>
  <input type="text" id="an8" value="<?php echo htmlspecialchars($an8); ?>" name="an8"><br><br>
<input type="submit" value="Submit">
</div>
</div>
</form>


         </body>
 </html>

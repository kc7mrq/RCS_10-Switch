<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/test_form.php" target="blank" method="post">
  <label for="fname">Antenna 1:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Antenna 2:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/test_form.php".</p>

</body>
</html>

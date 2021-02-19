<?php
include 'config1.php';
?>

<html>
<head>
	<title>html form</title>
</head>
<body>
      <form method="post" action="edit.php">
      	  USER NAME:<input type="text" name="USERNAME" placeholder="name" required><br>
      	  EMAIL:<input type="EMAIL" name="EMAIL" placeholder="email" required><br>
              CONTACT:<input type="text" name="CONTACT" placeholder="CONTACT" required><br>
      	  Select city:<select name="city">
      	   	<option>dehradun</option>
      	   	<option>delhi</option>
      	   	<option>hisar</option>
      	   	<option>tehri</option>
      	   	<option>none</option>
      	   </select><br>
      	  <input type="submit" value="click here to update" name="submit">  
      </form>
</body>
</html>
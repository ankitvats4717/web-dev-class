<?php
//echo "php";
//$var1=10;
//$var2=50;
//$sum=$var1+$var2;
//echo "sum is =$sum";
if(isset($_GET['submit']))
{
	if(empty($_GET['var1'])||empty($_GET['var2']))
	{
		echo "no input provided";
	}
	else
	{
      $sum=$_GET['var1']+$_GET['var2'];
      echo "SUM IS =$sum";
    }
}
else
{
echo "No input";
}
?>
<html>
<head>
	<title>php first program</title>
</head>
<body>
     <form method="get" action="index.php">
      	  Variable 1<input type="text" name="var1">
      	  Variable 2<input type="text" name="var2"><br> 
      	  <input type="submit" name="submit">
     </form>
</body>
</html>
<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="fullstackwebdev";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
	echo "connection succesfull.....";
}
else
{
	echo "connection failed";
	mysqli_connect_error();
}
?>
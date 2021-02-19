<?php
include 'config1.php';
?>
<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0)
{
?>
 <table  border="1px">
       <thead>
                <tr>
                   <th>user name</th>
                   <th>email </th>
                   <th>contact </th>
                   <th>city </th>
                   <th>edit</th>
                   <th>delete</th>
                </tr>
      </thead> 
       <tbody>
            <?php
       	     //while($row = $result->fetch_array())
            while($row = $result->fetch_assoc())
       	     {?>

              <tr>
                  <td><?php  echo $row['user_name'] ?></td>
                  <td><?php  echo $row['email'] ?></td>
                  <td><?php  echo $row['contact'] ?></td>
                  <td><?php  echo $row['city'] ?></td>
                  <td><a href="edit.php?id=<?php echo$row['id']?>">
                  	<input type="button" name="Edit" value="Edit"> </td>
                   <td><input type="button" name="Delete" value="delete"></td>
             </tr>
             <?php
              }
              ?>
       </tbody>
</table>
<?php
}
?>

<html>
<head>
	<title>User Details</title>
</head>
<body>
      
</body>
</html>
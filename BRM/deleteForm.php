<?php
$con=mysqli_connect('localhost','root'); 
mysqli_select_db($con,'BRM_DB');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<head>
<title>Delete Book Records</title>
<link rel="stylesheet" href="css/viewstyle.css"/>
</head>
<body>
<h1>Book Record Management</h1>
<form action="deletion.php" method="post">
  <table id="view-table">
  <tr>
  <th>Book_Id</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
  <th>select to delete</th>
  </tr>
  <?php
    for($i=1;$i<=$num;$i++)
      {
	   
           $row=mysqli_fetch_array($result);
    ?>
	      <tr>
		    <td><?php echo $row['Book_id'];?></td>
			<td><?php echo $row['Title'];?></td>
			<td><?php echo $row['Price'];?></td>
			<td><?php echo $row['Author'];?></td>
			<td><input type="checkbox" value="<?php echo $row['Book_id']; ?>" name="b<?php echo $i;?>"/></td>
			
          </tr>
			
	<?php
	   }		   
    ?>
	<tr>
	<td><input type="submit" value="delete"></td>
	</tr>
 
  </table>
  <form>
</body>
</html>
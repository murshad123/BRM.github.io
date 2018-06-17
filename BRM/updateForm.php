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
<title>update Book Records</title>
<link rel="stylesheet" href="css/viewstyle.css"/>
</head>
<body>
<h1>Book Record Management</h1>
<form action="updation.php" method="post">
  <table id="view-table">
  <tr>
  <th>Book_Id</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
  </tr>
  <?php
    for($i=1;$i<=$num;$i++)
      {
	   
           $row=mysqli_fetch_array($result);
    ?>
	      <tr>
		    <td><?php echo $row['Book_id'];?><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['Book_id'];?>"/></td>
			
			
			<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['Title'];?>"/></td>
			
			<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['Price'];?>"/></td>
			
			<td><input type="text" name="author<?php echo $i;?>"  value="<?php echo $row['Author'];?>"/></td>
          </tr>
			
	<?php
	   }		   
    ?>
 
  </table>
  <input type="submit" value="Update"/>
  </form>
</body>
</html>
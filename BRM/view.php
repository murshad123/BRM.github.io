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
<title>View Book Records</title>
<link rel="stylesheet" href="css/viewstyle.css"/>
</head>
<body>
<h1>Book Record Management</h1>
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
		    <th><?php echo $row['Book_id'];?></th>
			<th><?php echo $row['Title'];?></th>
			<th><?php echo $row['Price'];?></th>
			<th><?php echo $row['Author'];?></th>
          </tr>
			
	<?php
	   }		   
    ?>
 
  </table>
</body>
</html>
<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}

$con=mysqli_connect('localhost','root'); 
mysqli_select_db($con,'BRM_DB');

for($k=1;$k<=$size;$k++)
{
	$q="delete from book where Book_id=".$b_id[$k];
	mysqli_query($con,$q);
	
}
mysqli_close($con);

?>
<!DOCTYPE html>
<head>
<title>deletion</title>
</head>
<body>
<h1>Book Record Management</h1>
 
  <p>
  <?php
         
			 echo $size."Record deleted";
		 ?>
	     
 
  </p>
  Go back to home page?<a href="Home.php">Click Here</a>
</body>
</html>
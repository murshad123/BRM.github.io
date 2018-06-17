<?php
$size=sizeof($_POST);
$record=$size/4;

for($i=1;$i<=$record;$i++)
 {
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
 }
$con=mysqli_connect('localhost','root'); 
mysqli_select_db($con,'BRM_DB');
for($i=1;$i<=$record;$i++)
{
	$q="update book SET Title='$title[$i]',Price=$price[$i],Author='$author[$i]'where Book_id=$bookid[$i]";
	mysqli_query($con,$q);
}
mysqli_close($con);

?>
<!DOCTYPE html>
<head>
<title>Updation</title>
</head>
<body>
<h1>Book Record Management</h1>
<p><?php
      echo $size."Record updated";
	  
	?>
	  </p>
	  GO back to home page<a href="home.php">Click Here</a>
</body>
</html>

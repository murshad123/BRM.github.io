<!DOCTYPE html>
<head>
<title>insertion Form</title>
</head>
<body>
<h1>Book Record Management</h1>
<form action="insertion.php" method="post">
<table>
  <tr>
  <th>Title</th>
  <td><input type="text"placeholder="Enter title"  name="title" required/></td>
  </tr>
  <tr>
  <th>Price</th>
  <td><input type="text"placeholder="Enter price" name="price" required/></td>
  </tr>
  <tr>
  <th>Author</th>
  <td><input type="text"placeholder="Enter author's name" name="author" /></td>
  </tr>
  <tr>
  <th></th>
  <td><input type="submit" value="insert" /></td>
  </tr>
</table>
</form>

</body>
</html>
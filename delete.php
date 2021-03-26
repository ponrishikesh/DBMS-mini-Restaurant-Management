<?php
include("test2.php");
error_reporting(0);

$name=$_GET['rn'];
$query= "DELETE FROM CART_DETAILS WHERE Sno = '$name'";
$data=mysqli_query($conn,$query);

if($data)
{
echo"<font color='green'>Record Deleted From Table";
}
else{
	echo"<font color='red'>Failed To delete";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<br>
    <p><a href="Kaanum.php">Show Cart</a></p>
    <br>



</body>
</html>



	








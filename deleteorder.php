<?php
include_once 'test2.php';
if(isset($_POST['save']))
{	 
	 
    $o_CID = $_POST['CID'];
     $sql1 = "DELETE FROM cart_details WHERE customer_id= '$o_CID'"; 
     $sql2 = "DELETE FROM customer WHERE customer_id= '$o_CID'";
    
	
	 if (mysqli_query($conn, $sql1)) {
		echo "Order Cancelled !";
	 } else {
		echo "Error: " . $sql1 . "
" . mysqli_error($conn);
   
	 }


     if (mysqli_query($conn, $sql2)) {
		echo "Order Cancelled !";
	 } else {
		echo "Error: " . $sql2 . "
" . mysqli_error($conn);
   
	 }
	 
	 mysqli_close($conn);


     
    }


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<br>
    <p><a href="new2.html">Back to Menu</a></p>
    <br>



</body>
</html>











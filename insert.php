<?php
include_once 'test2.php';
if(isset($_POST['save']))
{	 
	 $o_name = $_POST['Item_Name'];
	 $o_CID = $_POST['CID'];
     $o_quan = $_POST['Quantity'];
     $o_price = $_POST['Price'];
	 $fin_price = $o_quan*$o_price;
     $sql = "INSERT INTO cart_details (customer_id,food_name,food_quantity,food_price)
	 VALUES ('$o_CID','$o_name','$o_quan','$fin_price')"; 
	
	
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
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


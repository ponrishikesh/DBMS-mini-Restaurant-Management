<?php
include_once 'test2.php';
if(isset($_POST['save']))
{	
    $CID=$_POST['CID']; 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mailid=$_POST['mailid'];
    $doorno=$_POST['doorno'];
    $street=$_POST['street'];
    $area=$_POST['area'];
    $loc=$_POST['loc']; 
    $pin=$_POST['pin'];  
    $contno=$_POST['contno'];
    $paym=$_POST['paym'];
    $premcust=$_POST['premcust'];
  
    $sql = "INSERT INTO customer(customer_id,fname,lname,contno,mailid,doorno,street,area,locates,pincode,paying_method,cust_prem)
    VALUES('$CID','$fname','$lname','$contno','$mailid','$doorno','$street','$area','$loc','$pin','$paym','$premcust')" ;
	
	if($_POST['premcust']=="YES"){
        $sql1="SELECT sum(food_price) as 'Total_Cost_1' FROM cart_details";
        $rs= mysqli_query($conn,$sql1);
    }
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
    <a href ='deleteorder.php?rn=$_POST[CID]'>Delete Order<br></a>
    <br>
    <form method="post" action="FinalDisplay.php">
    
    <p>PREMIUM CUSTOMER :<span style="padding-left: 20mm;"></span>
            <select type="text" name="premcust">
                <option>YES</option>
                <option>NO</option>
                
            </select></p>
    <input type="submit" name="save" value="Display Order Table">
  </form>
  



</body>
</html>


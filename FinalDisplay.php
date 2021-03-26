<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style type="text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        
        }
        th{
            background-color: #d96459;
            color: white;
        }
        </style>
</head>
<body>
<form method="post" action="payz.html">
    <h1>Delivery Table Preview</h1>
    <br>
    <table>
        <tr>
            <th>Customer Id</th>
            <th>Customer Number</th>
            <th>Customer Area</th>
            <th>Customer Pincode</th>
            <th>Del_Id</th>
            <th>Del_Fname</th>
            <th>Del_Lname</th>  
            <th>Del_Number</th>
            <th>Del_AreaCode</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if ($conn-> connect_error) {
    die("Connection failed :" . $conn-> connect_error);
}
$sql1 = "SELECT customer.customer_id,customer.contno,customer.area,customer.pincode,delivery_boy.del_id,delivery_boy.del_fname,delivery_boy.del_lname,delivery_boy.delboy_phno,delivery_boy.del_areacode
from customer
 inner join delivery_boy on delivery_boy.del_areacode=customer.pincode";
$result = $conn-> query($sql1);

if ($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["customer_id"] ."</td>
        <td>". $row["contno"] ."</td>
        <td>". $row["area"] ."</td>
        <td>". $row["pincode"] ."</td>
        <td>". $row["del_id"] ."</td>
        <td>". $row["del_fname"] ."</td>
        <td>". $row["del_lname"] ."</td>
        <td>". $row["delboy_phno"] ."</td>
        <td>". $row["del_areacode"] ."</td>
        </tr>";
    }
    echo"</table>";
}
else{
    echo"0 result";
}
$query="SELECT sum(food_price) as 'Total_Price' from cart_details";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo"<h2>Total Sum : </h2>".$data['Total_Price'];
?>
</table> 
</body>
</html>
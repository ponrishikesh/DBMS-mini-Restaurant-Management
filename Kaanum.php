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
    <h1>Cart Preview</h1>
    <br>
    <table>
        <tr>
            <th> SNo </th>
            <th>Customer Id</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>  
            <th>Operation</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if ($conn-> connect_error) {
    die("Connection failed :" . $conn-> connect_error);
}
$sql = "SELECT Sno,customer_id, food_name ,food_quantity ,food_price from cart_details";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Sno"] ."</td>
        <td>". $row["customer_id"] ."</td>
        <td>". $row["food_name"] ."</td>
        <td>". $row["food_quantity"] ."</td>
        <td>". $row["food_price"] ."</td>
        <td><a href ='delete.php?rn=$row[Sno]'>Delete </td>
        </tr>";
    }
    echo"</table>";
}
else{
    echo"0 result";
}
$conn-> close();
?>
</table>

   
    <input type="submit" name="save" value="Confirm Order">
  </form><br>
  <form method="post" action="new2.html">

  <input type="submit" name="save" value="Back To Menu">
  </form><br>
</body>
</html>
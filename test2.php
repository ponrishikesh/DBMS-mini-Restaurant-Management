<?php
$ser="localhost";
$user="root";
$pass="";
$db="project";

$conn=mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
echo "Connection Success";
?>
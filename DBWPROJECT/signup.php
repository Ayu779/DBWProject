<?php
session_start();
extract($_POST);
include("connection.php");
$fname=$_POST['FirstName'];
$mail=$_POST['Email'];
$mob=$_POST['Phone'];
$pass=$_POST['Password'];
$query="insert into users(FirstName,Email,Phone,Password) values('$fname','$mail','$mob','$pass')";
$rs=mysqli_query($conn,$query);
echo "<html><script> alert('Your Login ID Created Sucessfully');</script></html>";
$_SESSION['message']="You Are Now Logged in!";
$_SESSION['FirstName']=$fname;
?>
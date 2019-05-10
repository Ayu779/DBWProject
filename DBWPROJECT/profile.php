<?php
include("connection.php");
session_start();
$pass=$_POST['Password'];
$add=$_POST['Address'];
$fname=$_POST['FirstName'];
$mail= $_SESSION["Email"];
$phone=$_POST['Phone'];
if(isset($_POST['submit']))
{
	$query="UPDATE users set FirstName='$fname',Password='$pass',Address='$add',Phone='$phone' where Email='$mail'";
	$result=mysqli_query($conn,$query);
	if($result)
		{
		echo"<html><script>alert('Updated successfully!!!')</script></html>";
        header("location: afterloginhome.html");
		}
		else
		echo"<html><script>alert('Can`t update')</script></html>";
}
?>
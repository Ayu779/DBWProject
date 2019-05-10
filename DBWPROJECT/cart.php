<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto:300,700" rel="stylesheet">
<title></title>
</head>
<body>
<?php
    session_start();
	include("connection.php");
	$mail=$_SESSION['Email'];
	$a=$_POST['cname'];
	$b=$_POST['cprice'];
    
    if (isset($_POST["submit"])){
	    echo"<html> <script>alert('Are you Sure you want to buy this product ?'); </script></html>";
	$query="insert into cart values('$mail','$a','$b')";
		$result=mysqli_query($conn,$query);
		if(!$result)
		{
		echo "<html><script>alert(Could not Add to cart')</script></html> ";}
		else{
		 echo"<html><script>alert('Added successfully')</script></html>";
        header("location: afterloginhome.html");
		 }}
?>
</body>
</html>
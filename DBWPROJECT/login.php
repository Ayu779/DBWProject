<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $mail =$_POST['Email'];
      $password = $_POST['Password']; 
      $sql = "SELECT * FROM users WHERE Email = '$mail' and Password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);   
      $count = mysqli_num_rows($result);
    
      if($count == 1) {
	  
         $_SESSION["FirstName"] = $row['FirstName'];
		
		 $_SESSION["Phone"]=$row['Phone'];
		 $_SESSION["Email"]=$row['Email'];
		 $_SESSION["Address"]=$row['Address'];
		 $_SESSION["Password"]=$row['Password'];
    
        header('location: afterloginhome.html');
          echo "<script>
        alert('Successfully Logged In!'); </script>";
      }else {
         echo "<script>
		 alert('Invalid Login Name OR Password'); </script>";
          header('location: wrongpass.html')
;
      }
      }
?>
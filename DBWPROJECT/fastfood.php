
<html>
    <head>
    <title>EAT</title>
        <meta name= viewport content= "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
                        .box{
background: transparent;
border-radius: 1rem;
width:50%;
}
.box:hover{
border: 1px dashed black;                
            }
.buy{
border-radius: 2rem;
background:#0062cc;
color: #fff;
font-family: 'Quicksand', sans-serif;
 font-weight: 450;
 cursor: pointer;}
            

            .social {
  position: absolute;
  width: 100%;
  top: 110%;
  text-align: center;
  transform: translateY(-50%);
}

.social .link {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  width: 80px;
  height: 80px;
  border-radius:45%;
  border: 2px dashed black;
  background-clip: content-box;
  padding: 10px;
  transition: .5s;
  color: #D7D0BE;
  margin-left: 15px;
  margin-right: 15px;
  font-size: 40px;
}

.social .link span {
  display: block;
  position: absolute;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.social .link:hover {
  padding: 20px;
  color: white;
  margin-left: -5px;
  transform: translateX(10px) rotate(360deg);
}

.social .link.google-plus {
  background-color: tomato;
  color: white;
}

.social .link.twitter {
  background-color: #00ACEE;
  color: white;
}

.social .link.facebook {
  background-color: #3B5998;
  color: white;
}
            
            .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
            }
            
        #cover {
  width: 800px;
  height: 800px;
  margin: 0 auto;

}

#cover > a > img {
  float: center;
  border: 2px solid black;
  width: 32%;
    height: 32%;
  margin: 1.66%;
    margin-top: 0;
    margin-left: 0;
    
}
        </style>
        <header>
            <nav>
                <div class ="row clearfix">
                <a href = "afterloginhome.html"><img src = "images/logo.png" class = "logo">
                    </a>
                    <ul class = "nav1 animated slideInDown" id ="check-class">
                        <li><a href ="about.html">About Us</a></li>
                        <li><a href ="cartview.php">Cart</a></li>
                        <li><a href ="contact.html">Contact Us</a></li>
                        <li><a href ="profile.html">My Profile</a></li>
                        <li><a href ="logout.php">Signout</a></li>
                    </ul>
                   <a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
                       </div>
            </nav>
        <br>
        
        <div> <?php
include("connection.php");
$sql="SELECT * FROM fastfood ORDER BY Name ASC";
$status=mysqli_query($conn,$sql);
if($status)
{
while($e=mysqli_fetch_array($status))
{
echo"<div class='box'>";
echo "<b>Dish Name: </b>".$e['Name']."<br><b>Price: </b>".$e['Price']."<br>";
$s1=$e['Name'];
$s2=$e['Price'];
echo"<html><form action = 'cart.php' method='POST'>
<input type='hidden' name='cname' value='$s1'>
<input type='hidden' name='cprice' value='$s2'>

<input type='submit' name='submit' value='Get It' class='buy'>
<br>
<br></form></html>";
echo"</div>";
}}
?>
            </div>
</header>
        
        <div class="social">
  <a href="https://www.facebook.com/77ayush.saxena.77" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
  <a href="https://twitter.com/AyushSa69970436" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
  <a href="mailto:ayushsaxena7777@gmail.com" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
                </div>
        <script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}	

	</script>
    </body>
</html>
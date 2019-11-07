<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
	    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) 
	{
    .carousel-caption {
      display: none; 
	}}
	
	
	
	body {font-family: Arial, Helvetica, sans-serif;}
	/* Full-width input fields */
	input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	}
	/* Set a style for all buttons */
	button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 10%;
	}
	button:hover {
	opacity: 0.8;
	}
	/* Extra styles for the cancel button */
	.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
	}
	/* Center the image and position the close button */
	.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
	}
	img.avatar {
	width: 40%;
	border-radius: 50%;
	}
	.container {
	padding: 16px;
	}
	span.psw {
	float: right;
	padding-top: 16px;
	}
	/* The Modal (background) */
	.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	padding-top: 60px;
	}
	/* Modal Content/Box */
	.modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 80%; /* Could be more or less, depending on screen size */
	}
	/* The Close Button (x) */
	.close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
	}
	.close:hover,
	.close:focus {
	color: red;
	cursor: pointer;
	}
	/* Add Zoom Animation */
	.animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
	}
	@-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
	}
	@keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
	}
	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	span.psw {
     display: block;
     float: none;
	}
	.cancelbtn {
     width: 100%;
	}}	
</style>
</head>
<body>
<div class="header-top">
    <div class="container">
		<div class="row align-items-center">
			<div class="col-12 text-center">
				<a href="index.html" class="site-logo">
					<img src="images/logo.png" alt="Image" class="img-fluid">
				</a>
			</div>
			<!--<a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>-->
        </div>
    </div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="rings.html">Rings</a></li>
						<li><a href="earrings.html">Earrings</a></li>
						<li><a href="necklace.html">Necklace</a></li>
						<li><a href="brace.html">Bracelets</a></li>
					</ul>
				</li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
				<li><span class="glyphicon glyphicon-log-in"><h5 onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</h5></li>
				<li></li>
			</ul>
		</div>
	</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="C:\wamp64\www\web\images\deep1.jpg">     
      </div>

      <div class="item">
        <img src="C:\wamp64\www\web\images\deep2.png" >     
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div id="id01" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter registered email-id" name="email" required><br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required><br>
        
      <button type="submit">Login</button>
    </div>
	<?php 
require "conn.php";
if(isset($_POST["email"]) && isset($_POST["pass"]))
{
  $email =$_POST["email"];
  $pass =$_POST["pass"];
  $mysql_qry = "select email,pass from customer where email like '$email' and pass like '$pass';";
  $result = mysqli_query($con ,$mysql_qry);
  if(mysqli_num_rows($result) > 0) 
  {
    echo "login success !!!!! Welcome user";
  }
  else 
  {
     echo "login not success";
  }
}  
?>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>

<?php
    session_start();
	require 'conn.php';
    $database_name="jewel";
    $con = mysqli_connect("localhost","root","",$database_name);
    if (isset($_POST["add"])){
			$name=$_POST["hidden_name"];
			$image=$_POST["hidden_image"];
			$price=$_POST["hidden_price"];
			$name2=$_POST["hidden_name2"];
			$mysql_qry = "insert into cart(name,image,price,name2) values('$name','$image',$price,'$name2')";
			$result = mysqli_query($con ,$mysql_qry);
	if($result==1)
	{
		echo '<script>alert("Item is  Added to Cart")</script>';
    }
	else
	{
		echo '<script>alert("Item is not Added to Cart")</script>';
	}
}    
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diamond Bracelets</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
		body{
			background-image:url('assets/images/8.jpg');
			background-size:cover;
			background-position:center center;
			background-attachment:fixed;
		}
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
			.card-product .img-wrap {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
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
        </div>
    </div>
	<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.html">Home</a></li>
			<li><a href="selection.html">Shop</a></li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        </ul>
</div>
</div>
    <div class="container" style="width: 65%">
        <h2>Diamond Bracelets</h2>
        <?php
            $query = "SELECT * FROM bracelet ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
					
                    ?>
                    <div class="col-md-4">

                        <form method="post" action="?action=add&id=<?php echo $row["id"]; ?>">
						
                            <figure class="card card-product">
                                <div class="img-wrap"><img id="myImg" src="<?php echo $row["image"]; ?>" style="width:100%;max-width:300px""></div>
								<div id="myModal" class="modal">
									<span class="close">&times;</span>
									<img class="modal-content" id="img01">
									<div id="caption"></div>
								</div>
                                <figcaption class="info-wrap"><?php echo $row["name2"]; ?></figcaption>
                                <div class="bottom-wrap">
									<span class="price-new"><h5 class="text-danger">Rs.<?php echo $row["price"]; ?></h5></span>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
								<input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
								<input type="hidden" name="hidden_name2" value="<?php echo $row["name2"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
								</div>
                            </figure>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
       </div>
	    <script>
	   var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
</body>
</html>
﻿<!DOCTYPE html>
<html >

<head>
    <title>SMART Wardrobe</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0" />
    <!-- Bootstrap -->
	 <link href="frameworks/css/bootstrap.min.css" rel="stylesheet" />
	 <link href="frameworks/css/bootstrap-theme.min.css" rel="stylesheet"/>
	 <link href="frameworks/css/style.css" rel="stylesheet"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
        <?php 
        require_once('connect.php');
		
		if(isset($_POST['submit']))
        {
         $fileName = rand(1000,100000)."-".$_FILES["file"]["name"];  
         move_uploaded_file($_FILES["file"]["tmp_name"], "image/" . $fileName);  
      
        $productName = $_POST["pname"];
        $proDetails = $_POST["pcolor"];
        $typeofproduct = $_POST["typeofproduct"];
		
         echo $sql = "INSERT INTO gallery(cloth_name, cloth_color, cloth_categories,image) VALUES ('".$productName."' ,'".$proDetails."' ,'".$typeofproduct."','$fileName')";
          
        
        if(!mysqli_query($conn, $sql))
        {
             echo("Error description: " . mysqli_error($conn));
            echo "Not Inserted";
        }
        else
        {
            echo "Inserted";
        }
            
        }
       
        
        ?>
<!-- Navigation Bar -->
<div class="container-fluid">
	<nav class="navbar navbar head">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand system" href="#">SmartWardrobe</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="Main_Page.html">Home</a></li>
				<li><a href="Gallery.html">Gallery</a></li>
				<li><a href="ClothCombi.html">Combination</a></li>
				<li><a href="ClothTrack.html">Tracking Cloth</a></li>
				<li><a href="HelpContact.html">Help & Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="log_in.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
		</div>
	</nav>	
</div>

<div class="container-fluid"> 
	<div class="row">
		<div class="col-sm-4">
			 <div class="btn-group-vertical" style="padding:10px 40px 100px 40px; background-color:#DCDCDC;" >
				<!-- Cloths inside wardrobe -->
				<h2>What you have</h2>
				<iframe src="ClothsData.html"></iframe>
				<!-- Advice on trips -->
				<h3>Advice on upcoming trip</h3>
				<div class="fluidMedia">
					<iframe src="advice.html"></iframe>
				</div>
			</div>
		</div>
		<!--uploas cloth picture-->
		
			<div class="col-sm-4">
			<div style="padding:10px 40px 100px 40px; background-color:#DCDCDC;">
			<form method="post" name="myForm" role="form" enctype="multipart/form-data" onsubmit="return checkForm(myForm);">
			 Product Name:
			<input type="text" id="pname" name="pname" class="form-control" >
			</br> 
			 Product color:
			<input type="text" id="pcolor" name="pcolor" class="form-control" >
			</br>
 
			product type:
			  <select name="typeofproduct" class="form-control">
					<option>Clothing and Accesories</option>
						<option>Craft Supplies</option>
						<option>Room Decor</option>
						<option>Soft Toys</option>
						<option>Vintage Art</option>
						<option>Wedding Accesories</option>
									 
			  </select>
			  </br>
			  Upload immage:
			  <input type="file" name="file" class="form-control" accept="image/*" required>
			  </br>
			  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"  value="Submit">Submit</button>
			</form>
			</div>
		</div>
		<!-- Combination Pictures -->
		<div class="col-sm-4">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/1.jpg" alt="Los Angeles" width="500" height="6">
					</div>
					<div class="item">
						<img src="image/2.jpg" alt="Chicago" width="480" height="600">
					</div>
					<div class="item">
						<img src="image/5.jpg" alt="New york" width="480" height="600">
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>		
	<!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="frameworks/js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="frameworks/js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="frameworks/js/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
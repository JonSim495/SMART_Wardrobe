﻿
<!DOCTYPE html>
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
</head>

<body>


 <?php 
 session_start();
 	require_once('connect.php');
	
       	 if(isset($_POST['login']))
		 {
			 $fname = $_POST["fname"];
			  $password = $_POST["password"];
			  $sql = "SELECT * FROM `user` WHERE fname='$fname' and password='$password'";
			  $result=mysqli_query($conn,$sql);
			  $count=mysqli_num_rows($result);
			   if($count==1){
				$_SESSION['fname']= $fname;
			 }
			  else{
				   $fmsg= "invalit username/password";
			 }
		 }
	    if(isset($_SESSION['fname'])){
			<?php include 'Gallery.php';?>
		}
		if(isset($_POST['register']))
		{
          $fname = $_POST["fname"];
		  $lname = $_POST["lname"];
	      $email = $_POST["email"];
	      $password = $_POST["password"];
		  $conpassword = $_POST["conpassword"];
		  $dath_of_birth = $_POST["date"];
		  $gender = $_POST["gender"];
		 
		
		  echo $sql = "INSERT INTO user(fname,lname, email, password,conpassword,dath_of_birth,gender)VALUES ('".$fname."','".$lname."', '".$email."', '".$password."','".$conpassword."', '".$dath_of_birth."', '".$gender."')";
			   if(mysqli_query($conn,$sql))
			  {
				  echo "user registretion succesfull";
			   }else
			  {
				   echo "users result failed";
			   }
		}
		
   ?>
   
<div class="container-fluid">

	<nav class="navbar navbar head">
		<div class="container-fluid">
		
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
			<div class="navbar-header">
			  <a class="navbar-brand system" href="#">SmartWardrobe</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form" method="post">
					<div class="input-group" style="text-align:center;">
						<input style="text-align:center;" type="text" name="fname"  placeholder="UserName" required autofocus> &nbsp;
						<input style="text-align:center;" type="password" name="password" placeholder="Password" required>&nbsp;
						<input type="checkbox" name="remember"> Remember me
						<button type="submit" name="login" class="btn btn-default btn-sm" name="submit">
						<span class="glyphicon glyphicon-log-in"></span>
						LogIn </button>
					</div>
				</form>
			  </ul>
		</div>
	</nav>	
</div>

<div class="container"> 
	<div class="row">
		<div class="col-sm-6">
		  <h2>Some Cloths Combinations</h2>
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
		<div class="col-sm-6">
			<div class="register">
				<p style="font-size:25px;" >Create a New Account</p>
				<form method="POST">
					First Name:
					<input type="text" id="fname" name="fname" class="form-control" >
					</br>	
					Last Name:
					<input type="text" id="lname" name="lname" class="form-control" >
					</br>					
					Email:
					<input type="email" name="email" id="email" class="form-control" required>
					</br>
					Password:
					<input type="text" name="password" id="password" class="form-control" required>
					</br>
					Confirm Password:
					<input type="password" id="inputPassword2" name="conpassword" class="form-control" required>
					
					</br>
					Date of birth:
					<input type="date" class="form-control" name="date" data-date-inline-picker="true" />
					</br>
					Gender:
					<input type="radio" name="gender" value="male"> Male &nbsp;<input type="radio" name="gender" value="female"> Female &nbsp;
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Sign in</button>
				</form><!-- /form --> 
			</div> 
		</div>
    </div><!--row -->
</div><!-- /container -->



    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="frameworks/js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="frameworks/js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="frameworks/js/angular.min.js"></script>
	  

	
</body>
</html>
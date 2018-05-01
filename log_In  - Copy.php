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
       
		require_once('connect.php');
		if(isset($_POST)& !empty($_POST))
		{
          $fname = $_POST["fname"];
	      $email = $_POST["email"];
	      $password = $_POST["password"];
		 
		$sql_e = "SELECT * FROM users WHERE useremail='$email'";
		$res_e = mysqli_query($conn, $sql_e);
	 if(mysqli_num_rows($res_e) > 0){
			$email_error = "Sorry... email already taken"; 	
		}else{
		   $sql = "INSERT INTO users(fullname, useremail, password)VALUES ('".$fname."', '".$email."', '".$password."')";
			   (mysqli_query($conn,$sql));
				  echo "user registretion succesfull";
			      exit();
		}
		}
   ?>
   
<div class="container-fluid">
	<nav class="navbar navbar head">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand system" href="#">SmartWardrobe</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form" method="post">
					<div class="input-group" style="text-align:center;">
						<input style="text-align:center;" type="text" name="name"  placeholder="UserName" required autofocus> &nbsp;
						<input style="text-align:center;" type="password" name="pasword" placeholder="Password" required>&nbsp;
						<input type="checkbox" name="remember"> Remember me
						<button type="submit" class="btn btn-default btn-sm" name="submit">
						<span class="glyphicon glyphicon-log-in"></span>
						<a href="Main_Page.html">LogIn</a></button>
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
					<input type="text" id="fname" name="fname" class="form-control"  pattern ="[a-zA-Z]+">
					</br>	
					<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
						Email:
						 <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
						<?php if (isset($email_error)): ?>
					   <span><?php echo $email_error; ?></span>
					  <?php endif ?>
			        </div>
						</br>
						
					Password:
					<input type="text" name="password" id="password" class="form-control" required>
					</br>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
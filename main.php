<!DOCTYPE html>
<html>
<head>
	<title>Legend</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-family:Monospace;
		font-size: 9vw;
		top: 29%;
		left: 39%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-family:Monospace;
		font-size: 9vw;
		top: 49%;
		left: 39%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-family:Monospace;
		font-size: 9vw;
		top: 69%;
		left: 39%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 59%;
		background-color:#292828;
		border-radius: 29px;
		border:1px solid #fff;
	}
	#login{
		width: 59%;
		background-color: #292828;
		border: 1px solid #fff;
		color: #ffffff;
		border-radius: 29px;
	}
	#login:hover{
		width: 59%;
		background-color: #fff;
		color: #292828;
		border: 2px solid #292828;
		border-radius: 29px;
	}
	.well{
		background-color: #292828;
	}

</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="font-family:courier; color: white;">Legend</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/thumb.jpg" class="img-rounded" title="Legend" width="670px" height="565px">
			<div id="centered1" class="centered"><h3 style="color:white; font-family:courier;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Come and join to be a Legend.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:white; font-family:courier;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Meet and be with the Legends.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:white; font-family:courier;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>To be an extremely famous or notorious person.</strong></h3></div>
		</div>
		<div class="col-sm-6" style="left:8%:">
			<img src="images/thumb2.png" class="img-rounded" title="Legend" width="255px" height="255px">
			<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4><strong>Join Legend Now.</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>
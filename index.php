<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage your time</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<link rel="shortcut icon" type="text/css" href="img/checked.png">
</head>
<body>
<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><span><img width="35px" src="img/checked.png"> Manage your time</span></a>
				</div>
			 <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-nav-section="about">About</a></li>
					<li><a data-toggle="modal" data-target="#myModalLogIn">Log in</a></li>
					<li><a data-toggle="modal" data-target="#myModalSignUp">Sign up</a></li>
				</ul>
			</div>
			</div>
		</nav>  

<section  id="home" data-section="home" class="jumbotron" data-stellar-background-ratio="0.5">
<div class="gradient"></div>
	<div class="container">
		<div class="text-wrap">
			<div class="text-inner">
				<div class="row"><br/><br/>
					<div class="col-md-3 col-md-offset-9">
						<h1>Welcome!</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-md-offset-9">
				Accomplish more, every day. You can easily manage your time with us.</div>
				</div><br/>

				<div class="row">
					<div class="col-md-3 col-md-offset-9">
						<a class="btn btn-danger btn-lg" href="" data-target="#myModalSignUp" role="button">Get started</a>
					</div>
				</div><br/>

				<div class="row">
					<div class="col-md-3 col-md-offset-9">
						<span type="button" class="btn" role="button" data-toggle="modal" data-target="#myModalVideo" data-icon="&#xe107;"> Whatch a Video</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal VIDEO -->
		<div class="modal fade" id="myModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="video">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-icon="&#xe0cf;"></button>
				<h4 class="modal-title" id="myModalLabel">Achieve more everyday in your work and your daily life</h4>
			  </div>
			  <div class="modal-body">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Eh993__rOxA" frameborder="0" allowfullscreen></iframe>
			  </div>
			  <div class="modal-footer">
			  </div>
			</div>
		  </div>
		</div>



		<!-- LOG IN -->
		<div class="modal fade" id="myModalLogIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<center><span class="logo"><img src="img/CheckedMid.png"> Manage your time</span></center>
				</div><br/>
			<div class="modal-body">
				<form action="check.php" method="POST" class="form-horizontal">
					<div class="form-group">
						<input type="email" name="email" class="form-control" id="email" placeholder="Email">
  					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" name="login_btn" class="form-control btn btn-danger btn-lg">Log in</button>
					</div>
					<div class="form-group">
						<span class="fyp"><a href="#">Forgot your password?</a></span><br/>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<span class="fyp">Don't have an account?<a href="" data-toggle="modal" data-target="#myModalSignUp"> Sign up in seconds</a></span>
			</div>
			</div>
		  </div>
		</div>
		<!-- LOG IN PHP -->

		<!-- SIGN UP -->
		<div class="modal fade" id="myModalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<center><span class="logo"><img src="img/CheckedMid.png"> Manage your time</span></center>
				</div><br/>
			<div class="modal-body">
				<form action="action.php" method="POST" class="form-horizontal">
					<div class="form-group">
						<input type="text" class="form-control" id="username" name="username" placeholder="Your name">
  					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="r_password" name="r_password" placeholder="Repeate Password">
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-danger btn-lg">Sign Up</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<span class="fyp">Already have an account? <a href="signin.html" data-toggle="modal" data-target="#myModalLogIn"> Log in</a></span>
			</div>
			</div>
		  </div>
		</div>

	</div>
</section>


<section id="about" data-section="about">
	<center><div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="headers">Start getting more done in less time</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<span data-icon="&#xe128;"></span>
				<h2>Do your tasks on time</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe0fa;"></span>
				<h2>Do your work easier</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe0e4;"></span>
				<h2>Make and Do progresses on your life</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<span data-icon="&#xe0a5;"></span>
				<h2>Do your tasks on time</h2>
			</div>
			<div class="col-md-6">
				<span data-icon="&#xe0ec;"></span>
				<h2>Do your work easier</h2>
			</div>
		</div>
	</div></center>

	<div class="container">
		<div class="row row-content">
			<div class="col-xs-12 col-sm-3 col-sm-push-9">
				<h3 align="center"><img src="img/Simple-productivity-tips1.jpg" width="260" height="200"></h3>
			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3">
				<p class="txt">Todoist offers more useful features than any other to do service. So you can do more to customize the experience, organize your tasks and projects, and optimize your productivity.</p>
			</div>
		</div>
		<div class="row">
			<center><div class="col-md-8">
				<div class="row">
			<div class="col-md-4">
				<span data-icon="&#xe006;"></span>
				<h2>Upload images</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe0cd;"></span>
				<h2>Upload Documents</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe0e5;"></span>
				<h2>Attach Documents</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<span data-icon="&#xe032;"></span>
				<h2>Upload Video</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe074;"></span>
				<h2>Upload Video</h2>
			</div>
			<div class="col-md-4">
				<span data-icon="&#xe0d0;"></span>
				<h2>Calendar</h2>
			</div>
		</div>
		</div></center>
		<div class="col-md-4">
			<img src="img/macbook.png" width="500">
		</div>
			
		</div>
	</div>
</section>

	<footer class="row-footer">
		<div class="container">
			<div class="row">             
				<div class="col-md-5 col-md-offset-1 col-md-2 col-md-offset-1">
					<h5>Links</h5>
					<ul class="list-unstyled">
						<li><a href="index.php">Home</a></li>
						<li><a data-nav-section="about">About</a></li>
						<li><a data-toggle="modal" data-target="#myModalLogIn">Log In</a></li>
						<li><a data-toggle="modal" data-target="#myModalSignUp">Sign Up</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h5>Our Address</h5>
					<address>
					1/1 Abylai Khan Street<br>
					Kaskelen, Almaty<br>
					Kazakhstan, 040900<br>
					  <span data-icon="&#xe022;"></span> +7 727 307 95 65,69<br>
					  <span data-icon="&#xe08b;"></span> Fax: +7 727 307 95 58<br>
					  <span data-icon="&#xe048;"></span><a href="mailto:confusion@food.net"> info@sdu.edu.kz</a>
				   </address>
				</div>
				<div class="col-md-4">
					<b data-icon="&#xe033;"></b>
					<b data-icon="&#xe041;"></b>
					<b data-icon="&#xe045;"></b>
					<b data-icon="&#xe046;"></b>
				</div>
				<div class="col-md-12">
					<p style="padding:10px;"></p>
					<p align="center"> &copy; Copyright 2016 Meruyert Mukhanova</p>
				</div>
			</div>
		</div>
	</footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
</body>
</html>
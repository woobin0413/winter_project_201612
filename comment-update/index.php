<?php require_once 'php/connect.php'; require_once 'php/functions.php'; ?>
<!doctype html>
<html>
<head>
	<title>YouTube Comment System Series</title>
	<meta charset="UTF-8" lang="en-US">
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="js/global.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
</head>
<body>


	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="../home.html">SPACE B</a> </div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="../home.html">Home</a></li>
						<li><a href="index.php">Messages</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group input-group">
							<input type="text" class="form-control" placeholder="Search.."> <span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span> </button>
							</span>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../assets/php/addstudent.php"><span class="glyphicon glyphicon-user"></span> Donation</a></li>
						<li><a href='../login/includes/logout.inc.php'><span class="glyphicon glyphicon-user"></span>Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>


		<div class="page-container">
			<?php 
			get_total();
			require_once 'php/check_com.php';
			?>
			<form action="" method="post" class="main">
				<label>enter a brief comment</label>
				<textarea class="form-text" name="comment" id="comment"></textarea>
				<br />
				<input type="submit" class="form-submit" name="new_comment" value="post">
			</form>
			<?php get_comments(); ?>
		</div>
	</body>
	</html>
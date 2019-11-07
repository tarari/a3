<!DOCTYPE html>
<html>
<head>
	<title>A3</title>

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">

</head>
<body>
	<header>
		<div class="jumbotron">
			<center><h1>Project Myrent 1.0</h1></center>
		</div>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
			
				<li class="nav-item">
					<?php 
						if (isset($_SESSION['logged'])): ?>
						<a class="nav-link" href="logout.php">Logout</a>
					<?php else: ?>
						<a class="nav-link" href="login.php">Login</a>
					<?php endif; ?>
				</li>
				<li class="nav-item">
					<?php 
						if (!isset($_SESSION['logged'])): ?>
						<a class="nav-link" href="register.php">Register</a>
					<?php endif; ?>
				</li>
			</ul>
		</nav>
	</header>
<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['laboratory'])&&!empty($_SESSION['type'])) {
	header("Location: laboratory/");
}
elseif (!empty($_SESSION['doctor'])&&!empty($_SESSION['type'])) {
	header("Location: doctor/");
}
elseif (!empty($_SESSION['reception'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
elseif (!empty($_SESSION['bursar'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System - Login</title>
	<style type="text/css">
	body
	{
		background-color:green;
	}
		.wrapper
		{
			height: 250px;
			width: 700px;
			background-color: white;
			border: 1px solid #C2C5BA;
			margin: 0 auto;
			margin-top: 150px;
		}
		.left
		{
			height: 170px;
			width: 400px;
			border-right: 1px solid #C2C5BA;
			float: left;
			font-family: Arial;
			font-size: 25px;
			text-align: center;
			padding-top: 80px;
		}
		.right
		{
			height: 250px;
			width: 299px;
			float: left;
			text-align: center;
			font-family: Arial;
		}
		hr
		{
			border-bottom: 1px solid #ccc;
			border-top: 1px solid white;
		}
		.input
		{
			height: 30px;
			width: 80%;
			padding-left: 20px;
		}
		.btn
		{
			height: 35px;
			width: 90%;
			border: 0;
			background-color:green;
			margin: 0;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
.footer{
	height: 50px;
	width: 100%;
	background-color: #408080;
	float: left;
	margin-top: 100px;
}
		nav{
	background: black;
	color: white;
	padding: 1rem;
}
*
{
	margin:0px;
}
nav h2{
	display: inline;
}
nav h2 span{
	color: cyan;
}
ul{
	display: inline;
	float: right;
}
ul li{
	display: inline;
	padding: .5rem;
}
nav ul li:last-child{
	background: red;
	padding: .8rem;
	border-radius: 1.5rem;
}
nav ul li a{
	color: inherit;
	text-decoration: none;
	margin: 1rem;
	font-size: 1.3rem;
}
nav ul li:hover{
	border-bottom: 3px solid red;
}
	</style>
</head>
<body>
<nav>
	<h2><span>Welcome to our website</span></h2>
	<ul>
		<li><a href="home/home.php">Home</a></li>
		<li><a href="home/about.php">About</a></li>
		<li><a href="home/contact.php">Contact Us</a></li>
		<li><a href="../index.php">Login</a></li>
	</ul>
</nav>

<div class="wrapper">
	<div class="left">
		Harar Hospital Management System
	</div>
	<div class="right">
		<h3>Login Here</h3><hr>
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Enter Username"><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password"><br><br>
			<input type="submit" class="btn" name="btn" value="Login"><br>
		</form>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 } 
		 ?>
	</div>
</div>



</body>
</html>

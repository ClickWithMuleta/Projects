<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}

elseif (!empty($_SESSION['staff'])&&!empty($_SESSION['type'])) {
	header("Location: staff/");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Material Management System - Login</title>
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
#im1{

	width: 300px;
	margin-top:0px;
	height:103px;
}
#im2{

width: 50%;
margin:0px;
height:73px;
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
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="index.php">Login</a></li>
	</ul>
</nav>

<div class="wrapper">
	<div class="left">
		<p>
	<img src="assets/img/aamma.jpg" id="im1">
</p>
	Material Management System
	</div>
	<div class="right">

<p>
	<img src="assets/img/usn2.jpg" id="im2">

</p>
		<form action="index.php" method="post">
			<input  type="text" class="input" name="username" placeholder=" Enter Username" required><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password" required><br><br>
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

<center>
		<h4 style="color:black;font-size:19px; margin-left :130px;margin-top :130px;"> &copy; <?php echo date("Y"); ?> Addis Media Network</h4>
	</center>

</body>
</html>





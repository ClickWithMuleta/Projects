
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<style type="text/css">
	body
	{
		background-image:url("assets/img/aamma.jpg");
		background-repeat:no-repeat;
		background-size:cover;
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
img{

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
#ad{
	margin-left:80px;
	margin-top:50px;

}
p{
	font-size:14px;
	font-weight:bold;
}

.footer{
	height: 50px;
	width: 100%;
	margin-top: 130px;
	margin-left: 0px;
	background-color:white;
}

	</style>

</head>
<body>
<nav>
<h2><span>Welcome to our website</span></h2>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact </a></li>
		<li><a href="index.php">Login</a></li>
	</ul>	
</nav>
<div id="ad">
<h2> About Us </h2><br>
<p>
Addis Media Network (AMN) </p> 
<p>
	is a metropolis city media based

in Addis Ababa,Ethiopia.</p> 
<p>
	AMN owns Addis TV,FM 96.3 radio,Addis listan newspaper </p>
	<p>and all new media platforms.</p>
<h2>Industries </h2>

Media Production
<h2>Company size </h2>

201-500 Employees

<h2>Head Quarters </h2>
Addis Ababa

<h2>Type </h2>
Government Agency

<h2>Founded </h2>
1985 EC



	<center>
		<h4 style="color:black;font-size:19px; margin-left :130px;margin-top :130px;"> &copy; <?php echo date("Y"); ?> Addis Media Network</h4>
	</center>


</div>
	
</body>
</html>
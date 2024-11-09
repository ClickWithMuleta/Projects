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
	<title>Contact Us</title>
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
#txt{

	width: 300px;
	height:70px;
}

#cd{
	margin-left:80px;
	margin-top:10px;

}
#snd{
	background:cyan;

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
<div id="cd">
<h2> Contact Us </h2>
 <br>
<h2>Addis Media Network (AMN) </h2>

<h2>Website </h2>
www.materialmsamn.com


<h2>Official website </h2>
www.aamma.com

<h2>Tel. </h2>
1.0923544551<br>
2.0934775326


<h2>Address </h2>
5 kilo,Addis Ababa,Ethiopia.

<div id="cdi">
<h2> Contact here </h2>

				<form action="contact.php" method="POST" enctype="multipart/form-data">
				Name:
				<input type="text" name="fname" class="form" placeholder="Enter Full_name" required="required"><br><br>
				<br>Email:
				<input type="email" name="email" class="form" placeholder="Enter Email" required="required"><br><br>
				<br>Message:
				<input type="text" name="msg" style="height:72px; width:245px;" class="form" placeholder="Enter your message" required="required"><br><br>
				<input type="submit" style="color:cyan;  background:black;width:70px; margin-left: 123px;"value="Send" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($fname) && !empty($email) &&!empty($msg)) {
	
		include "includes/connect.php";
		$fname = trim(htmlspecialchars($_POST['fname']));
		$email = trim(htmlspecialchars($_POST['email']));
		$msg = trim(htmlspecialchars($_POST['msg']));
		
		
		require_once "includes/connect.php";
	
			
			$sql = "INSERT INTO `contacts` VALUES ('','$fname','$email','$msg')";
			$query = mysqli_query($con,$sql);
			if (!empty($query)) {
				echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Message Sent!</b>";
			}
			else{
				echo mysqli_error();
			}
		}
		
			
			 ?>
		
			

<center>
		<h4 style="color:black;font-size:19px; margin-left :130px;margin-top :0px;"> &copy; <?php echo date("Y"); ?> Addis Media Network</h4>
	</center>
</div>

</div>


</body>
</html>
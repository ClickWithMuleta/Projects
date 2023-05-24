
<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System -Home Page</title>
	<style type="text/css">
	body
	{
		background-color:green;
		background-image: url('hospital.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		margin-top: 0px;
		margin:0px;
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
	<h2><span>Welcome To General Harar Hospital Official Website!!</span></h2>
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="../index.php">Login</a></li>
	</ul>
</nav>

</body>
</html>

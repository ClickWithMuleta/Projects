
<?php 
function login()
{
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$pass = sha1($password);
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);
	if ($row == 0) {
		echo "<b style='font-size:15px; color:red;'>Wrong Username/Password Combination</b>";
	}
	elseif ($row == 1) {
		$fetch = mysqli_fetch_array($query);
		$type = $fetch['type'];
		$name = $fetch['username'];
		if ($type == "Admin") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['admin'] = $name;
			header("Location: admin/");
		}
		elseif  ($type == "Staff"){ 
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['staff'] = $name;
			header("Location: staff/");
		}
		else{
			echo "<b>Error</b>";
		}
	}
	else{
		echo "<b>Error</b>";
	}
}


function logout()
{
	@session_start();
	session_destroy();
	header("Location: ./index.php");
}


function admindetails()
{
	include "connect.php";
	@session_start();
	$username = $_SESSION['admin'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "  Welcome, <i>".$row['type']." you can logout here</i> (<a href='../logout.php'>Logout</a>)";
	}
}
function staffdetails()
{
	include "connect.php";
	@session_start();
	$username = $_SESSION['staff'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['type']." you can logout here...</i> (<a href='../logout.php'>Logout</a>)";
	}
}


?>

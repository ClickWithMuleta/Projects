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
		echo "<b style='font-size:12px;'>Wrong Username/Password Combination</b>";
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
		elseif ($type=="Doctor") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['doctor'] = $name;
			header("Location: doctor/");
		}
		elseif ($type=="Reception") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['reception'] = $name;
			header("Location: reception/");
		}
		elseif ($type=="Laboratory") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['laboratory'] = $name;
			header("Location: laboratory/");
		}
		elseif ($type=="Pharmacy") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['pharmacy'] = $name;
			header("Location: pharmacy/");
		}
		elseif ($type=="Bursar") {
			@session_start();
			$_SESSION['type'] = $type;
			$_SESSION['bursar'] = $name;
			header("Location: bursar/");
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
	$type = $_SESSION['type'];
	$username = $_SESSION['admin'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function bursardetails()
{
	include "connect.php";
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['bursar'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function doctordetails()
{
	include "connect.php";
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['doctor'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function receptiondetails()
{
	include "connect.php";
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['reception'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function laboratorydetails()
{
	include "connect.php";
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['laboratory'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function pharmacydetails()
{
	include "connect.php";
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['pharmacy'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysqli_query($con,$sql);
	while ($row =mysqli_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

?>

<?php 
session_start();
if (empty($_SESSION['admin'])) {
	header("Location: ../index.php");
}
else{
	$name = $_GET['name'];

	require_once "../includes/connect.php";
	$sql = "DELETE FROM `users` WHERE `username`='$name'";
	$query = mysqli_query($con,$sql);
	if (!empty($query)) {
		header("Location: users.php");
	}
}
?>
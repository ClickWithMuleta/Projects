<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	.total{
		height: 120px;
		width: 170px;
		border: 1px solid #408080;
		margin-top: 25px;
		margin-left: 40px;
		float: left;
		text-align: center;
		padding-top: 20px;
	}
	</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right">

		<div class="total">
				<b>Total Admins</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Admin'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:#408080; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Staffs</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Staff'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:#408080; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			
			<div class="total">
				<b>Total Products </b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `products` ";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:#408080; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>
		
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>
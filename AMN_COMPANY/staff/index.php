<?php 
session_start();
if (empty($_SESSION['staff']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Staff Dashboard - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	.total{
		height: 120px;
		width: 170px;
		border: 1px solid #408080;
		margin-top: 5px;
		margin-bottom: 5px;
		margin-left: 30%;
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
		<div style="padding-left:20px;padding-top:20px;">
			Welcome, <b>Staffs</b><br><br>
			In your Dashboard you can do the following jobs,<br><br>
			<ol>
				<li>View Products</li><br>
                <li>Update your Profile</li><br>

			</ol>
		</div>
		<div class="total">
				<b>Total Products</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `products`";
				
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
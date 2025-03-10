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
	<title>Settings Admin Dashboard - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br><br>
			<?php

			$name = $_SESSION['admin'];
			$type = $_SESSION['type'];

			?>
			<center>
				<form action="settings.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="username" class="form" value="<?php echo $name; ?>" required="required" disabled="disabled"><br><br>
				
				
				<?php 
				require_once '../includes/connect.php';
				$sql = "SELECT * FROM `users` WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con,$sql);
				while ($row = mysqli_fetch_array($query)) {
					?>

					<input type="text" name="fname" class="form" value="<?php echo $row['fname']; ?>" required="required"><br><br>
					<div id="fd">
	
				<img src="../assets/img/<?php echo $row['image'];?>" width="150px">

				<input type="file" name="image" value="<?php echo $row['image'];?>" class="form " required="required"><br><br>
	</div>
	
					<input type="text" name="phon" class="form" value="<?php echo $row['phon']; ?>" required="required"><br><br>
					<input type="password" name="password" class="form" placeholder="Enter Password" required="required"><br><br>
					<input type="password" name="password2" class="form" placeholder="Re-enter Password" required="required"><br><br>
					<?php
				}
				 ?>
				<input type="submit" value="Update" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($fname)&& !empty($phon)&& !empty($password)&& !empty($password2)) {
				if ($password != $password2) {
					echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
				}
				else{
					require "../includes/admin.php";
					settings();
				}
				
			}
			 ?>
			</center>
			</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>

</body>
</html>
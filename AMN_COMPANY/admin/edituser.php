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
	<title>Edit User - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>
#fd{

margin-left: 0px;
text-align :0px;
}

		</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<a href="users.php" style="margin-left:10px;"><button class="btnlink">View Users</button></a><br>
			<?php

			$name = $_GET['name'];

			?>
			<center>
				<form action="edituser.php?name=<?php echo $name; ?>" method="POST" enctype="multipart/form-data">
				<input type="text" name="username" class="form" value="<?php echo $name; ?>" required="required" disabled="disabled"><br><br>
				<select name="type" class="form" required="required">
					<option value="">Choose Type</option>
					<option>Admin</option>
					<option>Staff</option>
					
				</select><br><br>
				
				<?php 
				require_once '../includes/connect.php';
				$sql = "SELECT * FROM `users` WHERE `username`='$name'";
				$query = mysqli_query($con,$sql);
				while ($row = mysqli_fetch_array($query)) {
					?>
<div id="fd">
	
				<img src="../assets/img/<?php echo $row['image'];?>" width="150px">

				<input type="file" name="image" value="<?php echo $row['image'];?>" class="form "required="required"><br><br>
	</div>
	

					<input type="text" name="fname" class="form" value="<?php echo $row['fname']; ?>" required="required"><br><br>
					<input type="text" name="phon" class="form" value="<?php echo $row['phon']; ?>" required="required"><br><br>
					<?php
				}
				 ?>
				
				
				<input type="password" name="password" class="form" placeholder="Enter Password" required="required"><br><br>
				<input type="submit" value="Update" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($password) &&!empty($type)) {
				require "../includes/admin.php";
				updateuser();
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
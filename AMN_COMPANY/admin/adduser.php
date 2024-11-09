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
	<title>Add User - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>  
.error {color: #FF0001;}  
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
			<center>
				<form action="adduser.php" method="POST" enctype="multipart/form-data">
				<select name="type" class="form" required="required">
					<option value="">Choose Type</option>
					<option>Admin</option>
					<option>Staff</option>
				</select><br><br>
				<input type="text" name="username" class="form" placeholder="Enter User_name" required="required"><br><br>
				<input type="text" name="fname" class="form" placeholder="Enter Full_name or staff_name" required="required"><br><br>
				<input type="number" min="0" name="phon" class="form" placeholder="Enter Phone_number" required="required"><br><br>
				<input type="password" name="password" class="form" placeholder="Enter Password" required="required"><br><br>
				<input type="file" name="image" class="form" placeholder="choose image" required="required"><br><br>

				<input type="submit" value="Add" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($username) && !empty($password) &&!empty($type)) {
				require "../includes/admin.php";
				adduser();
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


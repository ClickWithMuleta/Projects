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
	<title>Products - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<a href="addproduct.php" style="margin-left:90px;" style="float:left;"><button class="btnlink">Add Product</button></a> <form action="search.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Product "></form><br>
			<br><br><table class="table" style="width:80% !important;">
			<?php 
				require '../includes/admin.php';
				viewproduct();
				 ?>
			</table><br><br>
			
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>
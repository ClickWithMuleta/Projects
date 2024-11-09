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
			<a href="addproduct.php" style="margin-left:10px;" style="float:left;"><button class="btnlink">Add Product</button></a><a href="assignproducts.php" style="margin-left:10px;" style="float:left;"><form action="search.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Product "></form><br><button class="btnlink" style="margin-left:10px;margin-top:20px; width:20%;">View Assigned Products</button></a><br>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Product_ID</th>
					<th>Product_name</th>
					<th>Image</th>
					
					<th>View</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php 
				require '../includes/admin.php';
				searchproducts();
				 ?>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>
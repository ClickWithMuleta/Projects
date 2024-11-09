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
	<title>Edit Product - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>
	#fdd{

margin-left:0px;
}
#fd{

margin-left:80px;
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
			<a href="products.php" style="margin-left:10px;"><button class="btnlink">View products</button></a><form action="search.php" method="get" style="float:right;margin-right:15px;"><input name="s" type="text" style="height:25px; width:180px;padding-left:15px;" placeholder="Search Product "></form><br><br>
			<?php $id = $_GET['id']; ?>
			<center>
				<form action="editproduct.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
				<?php
				require "../includes/connect.php";
				$sql = "SELECT * FROM `products` WHERE `id`='$id'"; 
				$query = mysqli_query($con,$sql);
				while ($row = mysqli_fetch_array($query)) {
					?>
				<input type="text" name="product_name" class="form" value="<?php echo $row['product_name']; ?>" required="required"><br><br>

	
				<img src="../assets/img/<?php echo $row['image'];?>" width="150px">

				<div id="fdd">
				<input type="file" name="image" value="<?php echo $row['image'];?>" class="form " required="required"><br><br>
				</div>
				<input type="text" name="status" class="form" value="<?php echo $row['status']; ?>" required="required"><br><br>
				<div id="fd">
				<input type="date" name="date" class="form" value="<?php echo $row['date']; ?>" required="required"><-- reg_date<br><br>
				</div>
				<input type="text" name="from" class="form" value="<?php echo $row['from']; ?>" required="required"><br><br>
				
					<?php
				}
				 ?>
				
				<input type="submit" value="Update" class="btnlink" name="btn"><br><br>
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($product_name) && !empty($status) &&!empty($date)) {
				require "../includes/admin.php";
				updateproduct();
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
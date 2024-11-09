<?php 
session_start();
if (empty($_SESSION['admin'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add A Product - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>
#fd{

margin-left:100px;
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
			<a href="products.php" style="margin-left:10px;"><button class="btnlink">View Products</button></a><br>
			<center>
				<form action="addproduct.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="product_name" class="form"  placeholder="Enter Product  Name" required="required"><br><br>
				browse...<input type="file" name="image" class="form" placeholder="choose image" required="required"> <br><br>

				<input type="text" name="status" class="form" placeholder="Enter status of product  " required="required"><br><br>
				
				<div id="fd">
				<input type="date" name="date" class="form" placeholder="date" required="required"><-- regst_date<br><br>
			</div>
				<input type="text" name="from" class="form" placeholder="From..." required="required"><br><br>

				<input type="submit" value="Add" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);

			if (isset($btn) && !empty($product_name) && !empty($status) &&!empty($date)&&!empty($from)) {
	
				//require "../includes/admin.php";
				addproduct();
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


<?php


function addproduct()
{
	include "../includes/connect.php";
	$product_name = trim(htmlspecialchars($_POST['product_name']));

	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = '../assets/img/'. $filename;

    move_uploaded_file($tempname,$folder);
   

	$status = trim(htmlspecialchars($_POST['status']));
	$date = trim(htmlspecialchars($_POST['date']));
	$from = trim(htmlspecialchars($_POST['from']));
	

	require_once "../includes/connect.php";

		
		$sql = "INSERT INTO `products` VALUES ('','$product_name','$filename','$status','$date','$from')";
		$query = mysqli_query($con,$sql);
		if (!empty($query)) {
			echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Product is Succesifully Added</b>";
		}
		else{
			echo mysqli_error();
		}
	}
	



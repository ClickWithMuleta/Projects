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
	<title>assign Product - MMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>
#fd{

	margin-left:100px;
}
#fdd{

margin-left:0px;
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
				<form action="assignproduct.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
				<?php
				require "../includes/connect.php";
				$sql = "SELECT * FROM `products` WHERE `id`='$id'"; 
				$query = mysqli_query($con,$sql);
				while ($row = mysqli_fetch_array($query)) {
					?>
				<input type="text" name="product_name" class="form" value="<?php echo $row['product_name']; ?>" required="required"><br><br>
	
	
				<img src="../assets/img/<?php echo $row['image'];?>" width="150px">
				<div id="fdd">
				<input type="file" name="image" value="<?php echo $row['image'];?>" class="form "required="required" ><br><br>
				</div>
				<input type="text" name="status" class="form" value="<?php echo $row['status']; ?>" required="required"><br><br>
				
					<?php
				}
				?>
				<div id="fd">
				<input type="date" name="date" class="form" placeholder="date" required="required"><-- assign_date<br><br>
			</div>
				<input type="text" name="user" class="form" placeholder="Enter User of Product" required="required"><br><br>
				<input type="text" name="staff" class="form"  placeholder="Enter Staff to assign"required="required"><br><br>

			
				
				<input type="submit" value="Next-->" class="btnlink" name="btn"><br><br>
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($product_name) && !empty($status) &&!empty($date)) {
				assignproduct();
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



function assignproduct()
{
	include "../includes/connect.php";
	$product_name = trim(htmlspecialchars($_POST['product_name']));

	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = '../assets/img/'. $filename;

    move_uploaded_file($tempname,$folder);
   

	$status = trim(htmlspecialchars($_POST['status']));
	$date = trim(htmlspecialchars($_POST['date']));
	$user = trim(htmlspecialchars($_POST['user']));
    $staff = trim(htmlspecialchars($_POST['staff']));

	

	require_once "../includes/connect.php";

		
		$sql = "INSERT INTO `assignproducts` VALUES ('','$product_name','$filename','$status','$date','$user','$staff')";
		$query = mysqli_query($con,$sql);
		if (!empty($query)) {
			//include "../admin/deleteproduct.php";
			
			header("Location: ../admin/index1.php");
		
		}
		else{
			echo mysqli_error();
		}
	}
	



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
	<a href="products.php" style="margin-left:10px;"><button class="btnlink">View Products</button></a><form action="search.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Product "></form><br>
			<br><br><table class="table" style="width:80% !important;">
			<?php 
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

<?php
	
function viewproduct()
{
	$id = $_GET['id'];
	//$product_name = $_GET['product_name'];
	require '../includes/connect.php';
	$sql = "SELECT * FROM `products` WHERE `id`='$id'";
	$query =mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		//$year = date('Y') - $row['birthyear'];
		echo "
		<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>Product_ID</b></td>
				<td>".$row['id']."</td>
			</tr>
			<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>Product_name</b></td>
				<td>".$row['product_name']."</td>
			</tr>

			
			<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>status</b></td>
				<td>".$row['status']."</td>
			</tr>
			<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>registered_date</b></td>
				<td>".$row['date']."</td>
			</tr>
			
			<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>From...</b></td>
				<td>".$row['from']."</td>
			</tr>



		";
		?>
		


		<tr style='height:40px;'>
		<td style='width:40%;padding-left:20px;'><b>Image</b></td>
		<td><img src="../assets/img/<?php echo $row['image'];?>" width="80px"></td>

			</tr>		
			<?php
	
		
	}
	
?>
	
				 <?php
}


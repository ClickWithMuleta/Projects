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
			<a href="assignproducts.php" style="margin-left:300px;" style="float:left;"><button class="btnlink" style="width:170px;">Veiw Assigned Product</button></a><form action="searchassignproduct.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Assigned Product "></form><br>
			<br><br><table class="table" style="width:80% !important;">
			<?php 
				//require '../includes/admin.php';
				viewassignproduct();
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

	
function viewassignproduct()
{
	$id = $_GET['id'];
	//$product_name = $_GET['product_name'];
	require '../includes/connect.php';
	$sql = "SELECT * FROM `assignproducts` WHERE `id`='$id'";
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
				<td style='width:40%;padding-left:20px;'><b>assign_date</b></td>
				<td>".$row['date']."</td>
			</tr>
			
			<tr style='height:40px;'>
				<td style='width:40%;padding-left:20px;'><b>User of product</b></td>
				<td>".$row['user']."</td>
			</tr>

            <tr style='height:40px;'>
            <td style='width:40%;padding-left:20px;'><b>Staff to assigned</b></td>
            <td>".$row['staff']."</td>
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


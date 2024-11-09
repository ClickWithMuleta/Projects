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
	<style type="text/css">
	a{
		text-decoration: none;
		color: #408080;
		}a:hover{
			text-decoration: underline;
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
			<form action="searchassignproduct.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Assigned Product "></form><br>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Product_Id</th>
					<th>Product_name</th>
					<th>Image</th>
					<th>View_details</th>
					<th>Delete</th>
				</tr>
				<?php 
				//require '../includes/admin.php';
				assignproducts();
				 ?>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>

<?php

function assignproducts()
{

	require '../includes/connect.php';
	$sql = "SELECT * FROM `assignproducts`";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {

		?>
		
		<tr height='30px'>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['product_name'];?></td>
		<td><img src="../assets/img/<?php echo $row['image'];?>" width="80px"></td>

		<?php
		echo "<td><center><a href='viewassignproduct.php?id=".$row['id']."'>View</a></center></td>";
		echo "<td><center><a href='deleteassignproduct.php?id=".$row['id']."'><img src='../assets/img/deleteimg.png' height='19px' width='15px'></a></center></td>";
	
		echo "</tr>";
	}
}




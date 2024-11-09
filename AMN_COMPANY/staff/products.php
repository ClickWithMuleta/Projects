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
			<form action="search.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Product "></form><br>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Product_Id</th>
					<th>Product_name</th>
					<th>Image</th>
					<th>View_details</th>
					
				</tr>
				<?php 
				//require '../includes/admin.php';
				products();
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

function products()
{

	require '../includes/connect.php';
	$sql = "SELECT * FROM `products`";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {

		?>
		
		<tr height='30px'>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['product_name'];?></td>
		<td><img src="../assets/img/<?php echo $row['image'];?>" width="80px"></td>

		<?php
		echo "<td><center><a href='viewproduct.php?id=".$row['id']."'>View</a></center></td>";
		
		echo "</tr>";
	}
}




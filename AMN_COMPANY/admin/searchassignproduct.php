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
			<form action="searchassignproduct.php" method="get" style="float:right;margin-right:15px;"><input type="text" style="height:25px; width:180px;padding-left:15px;" name="s" placeholder="Search Assigned Product "></form><br>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Product_ID</th>
					<th>Product_name</th>
					<th>Image</th>
					
					<th>View</th>
					<th>Delete</th>
				</tr>
				<?php 
				//require '../includes/admin.php';
				searchassignproducts();
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



function searchassignproducts()
{
	include '../includes/connect.php';
	$sachi = $_GET['s'];
	$sql = "SELECT * FROM `assignproducts` WHERE `product_name` LIKE '%$sachi%'";
	$query =mysqli_query($con,$sql);
	if (mysqli_num_rows($query)==0) {
		?>
		<center><?php echo "<br><b style='color:red;font-size:24px;font-family:Arial;'>Product doesn't exist</b>"?></center>;
	

	<?php	
	}
	else
	{
		?>

		<center> 
        
		<p style='color:blue; font-size:25px;'> Total quantity  <?php echo "(<b style='color:blue;font-size:25px;'>".$row = mysqli_num_rows($query)."</b>) "; ?></p>
	   </center>
	   <?php
	   
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr height=30px'>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['product_name']."</td>";
			?>
			<td><img src="../assets/img/<?php echo $row['image'];?>" width="80px"></td>
		  <?php
			echo "<td><center><a href='viewassignproduct.php?id=".$row['id']."'>View</a></center></td>";
			echo "<td><center><a href='deleteassignproduct.php?id=".$row['id']."'><img src='../assets/img/deleteimg.png' height='16px' width='12px'></a></center></td>";
			echo "</tr>";
		}

	
	}
	
}


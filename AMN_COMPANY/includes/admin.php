<?php 
function users()
{
	require 'connect.php';
	$sql = "SELECT * FROM `users`";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {

		?>
		
		<tr height='30px'>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['type'];?></td>

		<?php

		echo "<td><center><a href='edituser.php?name=".$row['username']."'><img src='../assets/img/editimg.png' height='16px' width='17px'></a></center></td>";
		echo "<td><center><a href='deleteuser.php?name=".$row['username']."'><img src='../assets/img/deleteimg.png' height='16px' width='12px'></a></center></td>";
	
		echo "</tr>";
	}
}


function adduser()
{
	include "connect.php";
	$username = trim(htmlspecialchars($_POST['username']));
	  
if (!preg_match ("/^[a-zA-z]*$/", $username) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
}
	$fname = trim(htmlspecialchars($_POST['fname']));
	$phon = trim(htmlspecialchars($_POST['phon']));
	$type = trim(htmlspecialchars($_POST['type']));
	$password = trim(htmlspecialchars($_POST['password']));

	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = '../assets/img/'. $filename;

    move_uploaded_file($tempname,$folder);
   

	$sql1 = "SELECT * FROM `users` WHERE `username`='$username'";
	$query1 = mysqli_query($con,$sql1);
	if (mysqli_num_rows($query1)==0) {
		$sql = "INSERT INTO `users` VALUES ('$username','$password','$fname','$phon','$type','$filename')";
		$query = mysqli_query($con,$sql);
		if (!empty($query)) {
			echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>User is Succesifully Added</b>";
		}
	}
	else{
		echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Choose Unique Name</b>";
	}

	
}
	function updateuser()
	{
		include "connect.php";
		//$username = trim(htmlspecialchars($_POST['username']));
		$fname = trim(htmlspecialchars($_POST['fname']));
		$phon = trim(htmlspecialchars($_POST['phon']));
		$type = trim(htmlspecialchars($_POST['type']));
		$password = trim(htmlspecialchars($_POST['password']));
		//s$pass = sha1($password);
	
	
		$filename = $_FILES["image"]["name"];
		$tempname = $_FILES["image"]["tmp_name"];
		$folder = '../assets/img/'. $filename;
	
		move_uploaded_file($tempname,$folder);
	   
	
		$name = $_GET['name'];
		
			$sql = "UPDATE `users` SET `fname`='$fname',`phon`='$phon',image='$filename',`type`='$type',`password`='$password' WHERE `username`='$name'";
			$query =mysqli_query($con,$sql);
			if (!empty($query)) {
				echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>User is Succesifully Updated</b>";
	
			}	
			else{
				echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>User is not Succesifully Updated</b>";

			}
	}
	
	


	
function updateproduct()
{
	include "connect.php";
	$id = $_GET['id'];
	$product_name = trim(htmlspecialchars($_POST['product_name']));
	$status = trim(htmlspecialchars($_POST['status']));
	$date = trim(htmlspecialchars($_POST['date']));
	$from = trim(htmlspecialchars($_POST['from']));
	

	
	$filename = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = '../assets/img/'. $filename;

	move_uploaded_file($tempname,$folder);
   


	require_once "connect.php";

	$sql = "UPDATE `products` SET `product_name`='$product_name',image='$filename',`status`='$status',`date`='$date',`from`='$from' WHERE `id`='$id'";
	$query = mysqli_query($con,$sql);
	if (!empty($query)) {
		echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Product is Succesifully Updated</b><br><br>";
?>
	
		<?php
	}
	else{
		echo mysqli_error();
	}
}



	
function viewproduct()
{
	$id = $_GET['id'];
	//$product_name = $_GET['product_name'];
	require 'connect.php';
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



function searchproducts()
{
	include 'connect.php';
	$sachi = $_GET['s'];
	$sql = "SELECT * FROM `products` WHERE `product_name` LIKE '%$sachi%'";
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
			echo "<td><center><a href='viewproduct.php?id=".$row['id']."'>View</a></center></td>";
			echo "<td><center><a href='editproduct.php?id=".$row['id']."'><img src='../assets/img/editimg.png' height='16px' width='17px'></a></center></td>";
			echo "<td><center><a href='deleteproduct.php?id=".$row['id']."'><img src='../assets/img/deleteimg.png' height='16px' width='12px'></a></center></td>";
			echo "</tr>";
		}

	
	}
	
}


function settings()
{
	include "connect.php";
	//$username = trim(htmlspecialchars($_POST['username']));
	$fname = trim(htmlspecialchars($_POST['fname']));
	$phon = trim(htmlspecialchars($_POST['phon']));
	$password2 = trim(htmlspecialchars($_POST['password2']));
	$password = trim(htmlspecialchars($_POST['password']));

	$filename = $_FILES["image"]["name"];
		$tempname = $_FILES["image"]["tmp_name"];
		$folder = '../assets/img/'. $filename;
	
		move_uploaded_file($tempname,$folder);
	   
	if ($password != $password) {
		echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
	}
	else{
		//$pass = sha1($password);
		$name = $_SESSION['admin'];
		$type = $_SESSION['type'];
			
				$sql = "UPDATE `users` SET `fname`='$fname',image='$filename',`phon`='$phon',`password`='$password' WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Updated</b>";

				}	
		}
	}
	
?>
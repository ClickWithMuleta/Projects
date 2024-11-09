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
#d1{

	margin-left :145px;
}
#d2{

margin-left :75px;
}
#left{
	min-height: 400px;
	max-height: auto;
	width: 20%;
	margin-top: 10px;
	margin-left:423px;
}
h3{
	margin-left :345px;
	margin-top: 90px;
}
		</style>
</head>
<body>
	<div class="wrapper">
	<?php
		//include "includes/header.php";
		//include "includes/left.php";
	 ?>
    

<h3> 
			To assign product,
		you should have to
		remove product from database <br><br>
		<span style="margin-left:200px;"> click link below</span>
		
</h3>
		<div id="left">

<a href="deleteproduct.php" style="margin-left:50px; "><button class="btnlink" style=" width:100%; height: 50px; margin-left:1px;font-size:20px;	margin-top: 150px;">redirect to database...</button></a><br>

</div>
		<?php 
		//include "includes/footer.php";
		 ?>
	</div>
    
</body>
</html>





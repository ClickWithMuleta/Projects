<?php
$con = mysqli_connect('localhost','root','','hospita');
if (empty($con)) {
 	echo mysqli_error();
 } 
 $data = mysqli_select_db($con,"hospita");
 if (empty($data)) {
 	echo mysqli_error();
 }
?>
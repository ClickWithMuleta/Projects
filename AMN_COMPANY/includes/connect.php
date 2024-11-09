<?php
$con = mysqli_connect('localhost','root','','amn_db');
if (empty($con)) {
 	echo mysqli_error();
 } 
 $data = mysqli_select_db($con,"amn_db");
 if (empty($data)) {
 	echo mysqli_error();
 }
?>
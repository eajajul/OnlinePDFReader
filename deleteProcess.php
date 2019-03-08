<?php
	$id= $_GET['id'];
	$con=mysqli_connect("localhost","root","","mydatabase");
	$query = "update resource set deleted='yes' where id='$id'";
	$sql = mysqli_query($con, $query);
	header('location: deleteBooks.php');
	
?>
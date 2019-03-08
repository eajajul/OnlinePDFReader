<?php

session_start();
  
		$uname=$_POST['uname'];
		$password=$_POST['password'];
	
		$con=mysqli_connect("localhost","root","","mydatabase");
		$query = "select * from admin where Username='$uname' and Password='$password'";
		$sql = mysqli_query($con, $query);
		if(mysqli_num_rows($sql)==1)
		{
			$_SESSION['a_name'] = $uname;
			header('location: adminDashboard.php');
		}
	
		else
		{
			header('location: error.php');
		}
	
?>
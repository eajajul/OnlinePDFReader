 <?php
    session_start();
	
	
		$uname=$_POST['uname'];
		$password=$_POST['password'];
	
		$con=mysqli_connect("localhost","root","","mydatabase");
		$query = "select * from user where Username='$uname' and Password='$password'";
		$sql = mysqli_query($con, $query);
		if(mysqli_num_rows($sql)==1)
		{
			$_SESSION['u_name'] = "flag";
			header('location: dashboard.php');
		}
	
		else
		{
			header('location: error.php');
		}
	
	


?>

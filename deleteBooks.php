<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Book reading</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>	


<body >
	<header>
		<h1> Online<img src ="bok.jpg" height ='100'>reading</h1>
	</header> 

	<div class='diva'></div>
	
	<div class ='dash'></div>
	<ul>
		<li><a href='adminDashboard.php'>Panel</a></li>
		<li><a href='login.php'>Log Out</a></li>
	</ul>
	
	<div class='diva'></div><br><br>
	
	<div class ="a">
		<div class='cat'>
			<h1> Delete Books</h1>
		</div>

		<div class ="d">
			<u>
				<?php 
					
					$con=mysqli_connect("localhost","root","","mydatabase");
					$query = "select * from resource where deleted IS NULL";
					$sql = mysqli_query($con, $query);
					while($row = mysqli_fetch_array($sql)){
					$pdf = $row['pdf'];
					$cover= $row['cover'];
					$id= $row['id'];
					$pdfPath= 'resource/pdf/'.$pdf;
					$coverPath= 'resource/cover/'.$cover;
					
					echo "<a href='$pdfPath'>  <img src = '$coverPath' alt='thumbnail' height='150px' width='150px'/></a>";
					echo"<form action='deleteProcess.php?id=$id' method='post'>
						<input type='submit' value='Delete' name='delete'>
						</form>";
		
					}
				?>
			</u>
		</div>
	</div>






<body>

</html>
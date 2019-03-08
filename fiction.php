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


<li><a href='dashboard.php'>Forums</a></li>
<li><a href='login.php'>Log Out</a></li>




</ul>
<div class='divs'></div><br><br>

<div class = 'all'>
<div class ='combo'> 
<div class='cat'>
	<h1> Fiction Books</h1>
</div>


<div class='fimage1'>
    <?php 
        $con=mysqli_connect("localhost","root","","mydatabase");
		$query = "select * from resource where category='Fiction' and deleted IS NULL";
		$sql = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($sql)){
				$pdf = $row['pdf'];
				$cover= $row['cover'];
				$pdfPath= 'resource/pdf/'.$pdf;
				$coverPath= 'resource/cover/'.$cover;
				echo "<a href='$pdfPath'>  <img src = '$coverPath' alt='thumbnail' height='150px' width='150px'/></a>";
			}
	?>
	


</div>
</div>
<div class ='more'>


<h1> For more stay with us.. :) </h1>
</div>





<body>

</html>

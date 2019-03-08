<!DOCTYPE html>
<html lang="en">



<head>
	<title>Online Book reading</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>

<?php 
	
	$message=null;
	if(isset($_POST['add']))
	{
	$con=mysqli_connect("localhost","root","","mydatabase");
	$bName=$_FILES["file1"]["name"];
	$bTempName=$_FILES["file1"]["tmp_name"];
	$bExt = $_FILES["file1"]["type"];
	
	$cName=$_FILES["file2"]["name"];
	$cTempName=$_FILES["file2"]["tmp_name"];
	$cExt = $_FILES["file2"]["type"];
	if($bExt==="application/pdf")
	{	
		if($cExt==="image/png" || $cExt==="image/jpg" || $cExt==="image/jpeg")
		{
			$count=0;
			$sql= mysqli_query($con, "select id from resource");
			while($row = mysqli_fetch_array($sql)){
				$count = $row['id'];
			}
			if($count==null){
				$count=1;
			}
			else{
				$count++;
			}
			$bTarget=$count."_".$bName;
			$cTarget=$count."_".$cName;
			move_uploaded_file($bTempName,"resource/pdf/".$bTarget);
			move_uploaded_file($cTempName,"resource/cover/".$cTarget);
			$category= $_POST["category"];

			$query = "INSERT INTO resource(pdf,cover,category)VALUES('$bTarget','$cTarget','$category')";
			mysqli_query($con, $query);
	
			$message="Added successful";
		}
		else{
			$message="Upload image in second file";
		}
	}
	else{
		$message="Upload PDF in first file";
	}
	
	
	}
?>


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
			<h1> Add Books</h1>
		</div>

		<div class ="admin">
			
				<form align="center" enctype="multipart/form-data" action="" method="post">
					
					<h2>PDF FILE HERE:</h2>
					<input type="file" name="file1" required ><br><br>
					<h2>IMAGE FILE HERE:</h2>
					<input type="file" name="file2" required ><br><br>
					
	                   <h2>SELECT CATEGORY:</h2>
					   <select name="category">
						<option value="Fiction">Fiction</option>
						<option value="History">History</option>
						<option value="Drama">Drama</option>
						<option value="Detective">Detective</option>
						<option value="Other">Other</option><br>
					
					</select>
						
					</br>
					<input type="submit" value="Add" name="add">
					</br>
					<?php //if($message==1)
							echo $message;
							$message=null;
					?>
				</form>
			
		</div>
	</div>






<body>

</html>
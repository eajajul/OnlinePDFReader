<?php
		session_start();
		//echo $_SESSION['u_name'];
		//if(!isset($_SESSION['u_name']));
		//{
			
		//	header('location: login.php');
			
			
	//	}
		
			if(isset($_SESSION['u_name']) && $_SESSION['u_name'] == "flag"){
				
			}
			else{
				header('location: login.php');
			}
			
		
		?>

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
<li><a href='logout.php'>Log Out</a></li>




</ul>
<div class='divs'></div><br><br>
<div class ="b">

<div class='cat'>
      <h1> Books Category</h1>
</div>

<div class ="d">
<div class ="dash">
     <u>
	
	 
	 <li><a href ='fiction.php'>Fiction</a></li>
	 <li><a href ='drama.php'>Drama</a></li>  
	 <li><a href ='history.php'> History</a></li>
	 <li><a href ='detective.php'> Detective</a></li>
	 <li><a href ='other.php'> Other</a></li>
	                        
	
	 </div>
</div>
<body>

</html>

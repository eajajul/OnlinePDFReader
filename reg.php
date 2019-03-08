<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Book reading</title>
<link rel="stylesheet" type="text/css" href="header.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","mydatabase");


if(isset($_POST['submit']))
{
	$f_name=$_POST['f_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];

	if($pass == $cpass)

	{
		$query1="select * from user where Username='$user'";
		$run1= mysqli_query($conn, $query1);
		$r= mysqli_num_rows($run1);
		
		if($r>=1)
		{	
			header("location: login.php");
			
		}
		else{
			$query = "INSERT INTO user(Name,Email,Phone,Username,Password)VALUES('$f_name','$email','$phone','$user','$pass')";
			$run = mysqli_query($conn,$query);	
		}
			
	
	}
	
}
?>

</head>

<body >

<header>
<h1> Online<img src ="bok.jpg" height ='100'>reading</h1>
</header> 


<div class='diva'></div>
<ul>

<li><a  href='index.php'>Home</a></li>
<li><a href='member'>Membership</a></li>
<li><a href='help'>Help</a></li>
<li><a href='login.php'>user</a></li>
<li><a href='adminLogin.php'>admin</a></li>
<li><a href='reg.php'>SignUp</a></li>
<li><a href='about'>AboutUs</a></li>
</ul>
<div class='divs'></div><br><br>

<div class = 'all'>

</head>
<body>

	<div class="container">
<br>
	
			
			<form  action="" onsubmit=" return validation()" method="POST">
				
					<div class= "a">
					<label> Name: </label>
					<input type="text" name="f_name" id="name" required placeholder="enetr_name" >
					<span  id= "nameida"> </span><br>
					
					
					<label> User Name: </label>
					<input type="text" name="user" id="username" required placeholder="enetr_username" >
					<span  id= "usernameid"> </span><br>
					
					<label> Password: </label>
					<input type="password" name="pass" id="password"  required placeholder ="enter_password">
					<span id="passwords" > </span><br>
					
					
					<label> Confirm Password: </label>
					<input type="password" name="cpass" id="passwordconfrm"  required placeholder="retype_password">
					<span id="confrmpasswrod" >  </span><br><br>
					
					
					
					<label> Mobile Number: </label>
					<input type="text" name="phone" id="numbermobile" required placeholder="enter your phone number">
					<span id="mobilenumber" > </span><br>
				
				
					
					
				  <label> Email: </label>
					<input type="text" name="email" id="emailid" required placeholder="email">
					<span id="emailids" > </span><br>

					
					
				
					

				
				

				
					
				
               <input type = "button"  id = "button" value = "Test" onclick = "validation()">
				<input type="submit" name="submit" value="Submit">

			</form>

          
		</div>
	
</div>

	<script type="text/javascript">

		
		function validation(){
           
		   var f_name = document.getElementById('name').value;
			var user = document.getElementById('username').value;
			var pass = document.getElementById('password').value;
			var cpass = document.getElementById('passwordconfrm').value;
			var phone = document.getElementById('numbermobile').value;
			var email = document.getElementById('emailid').value;
			
			document.getElementById('nameida').innerHTML = "";
			document.getElementById('passwords').innerHTML = "";
			document.getElementById('usernameid').innerHTML = "";
			document.getElementById('confrmpasswrod').innerHTML = "";
			document.getElementById('mobilenumber').innerHTML = "";
			document.getElementById('emailids').innerHTML = "";
		   if( f_name == "" ){
				document.getElementById('nameida').innerHTML = " ** please fill the username ";
				return false;
			}
			
			if(!isNaN(f_name)){
				document.getElementById('nameida').innerHTML = " ** character only";
				return false;
			}



			if( user == "" ){
				document.getElementById('usernameid').innerHTML = " ** please fill the username ";
				return false;
			}
			
			



			if( pass == "" ){
				document.getElementById('passwords').innerHTML = " **please fill the password ";
				return false;
			}

			if((pass.length < 5) || (pass.length > 12)){
				document.getElementById('passwords').innerHTML = " **Password field is Null or Atleast 8 to 12 number or digit";
				return false;
			}

			if( pass!=cpass){
				document.getElementById('confrmpasswrod').innerHTML = " **  password are not matching";
				return false;
			}



			if( cpass == "" ){
				document.getElementById('confrmpasswrod').innerHTML = " ** please fill the confirm paasword ";
				return false;
			}


			if( phone == "" ){
				document.getElementById('mobilenumber').innerHTML = " ** please fill the mobile number ";
				return false;
			}

			if(phone.length!=11){
				document.getElementById('mobilenumber').innerHTML = " ** Mobile number should be 11 digits ";
				return false;
			}
			if(isNaN(phone)){
				document.getElementById('mobilenumber').innerHTML = " ** Mobile number should conatins only digits ";
				return false;
			}





			if( email == "" ){
				document.getElementById('emailids').innerHTML = " ** please fill the email id ";
				return false;
			}


			if(email.indexOf('@') <= 0){
				document.getElementById('emailids').innerHTML = " ** write in proper way  ";
				return false;
			}

				



		}

	</script>
	
			


</body>
</html>
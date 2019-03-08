<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Online Book reading</title>
<link rel="stylesheet" type="text/css" href="header.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>



</head>



<body>

<header>
<h1> Online<img src ="bok.jpg" height ='100'>reading</h1>
</header> 


<div class='diva'></div>
<ul>

<li><a  href='index.php'>Home</a></li>
<li><a href='member'>Membership</a></li>
<li><a href='help'>Help</a></li>
<li><a href='login.php'>Login</a></li>
<li><a href='adminLogin.php'>Admin</a></li>
<li><a href='reg.php'>SignUp</a></li>
<li><a href='about'>AboutUs</a></li>
</ul>
<div class='divs'></div><br>





<div class="ai">
<form action="data.php" method="post">
<table width ="450px">
</tr>

<tr>
<td>
<label for ="first_name">User Name:</label>
</td>
</tr>
<td>
<input type ="text" name="uname" placeholder="user_name" required maxlength ="50" size="40"  >
</td>
</tr>
<tr>
<td>
<label for ="last_name">Password:</label>
</td>
</tr>
<td>
<input type ="password" name="password" placeholder="Password" required maxlength ="50" size="40" >
</td>
</tr>
<tr>
<td>
</tr>
<tr>
<td style= "text-algin:center">

<input type ="submit" name ="Login" value="Login">
</table>
</form>  

</div>


</body>

</html>



<?php
	session_start();
if(isset($_POST['username']))
{
	$conn=mysqli_connect('localhost','id5412800_shrayansh151','9755505055','id5412800_quiz');
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$q="select user,password from registration where user='$user' and password='$pass'";
	
	$res=mysqli_query($conn,$q);
	$num=mysqli_num_rows($res);     //it is fetch no of  rows.
	$r=mysqli_fetch_row($res);   //it is fetch only one row.
	
	if($num>0)
	{
		$_SESSION['s']=$r[0];
		//echo "Login Successful";
	header('location:home.html');
	}
	else
	{
		echo "Retry";
	}
	
}
?>
<!doctype html>
<html>
	<head>
		<title>Intensify Login</title>
		<link rel="stylesheet" href="astyle.css">
	</head>
	<body>
 
		<div class="box">
			<h2>Admin Login </h2>
			<form method="post" id="form1">
				
				<div class="inputBox">
					<input type="text" name="username" required="">
					<label>Username</label>
				</div>
				<div class="inputBox">
					<input type="password" name="password" required="">
					<label>Password</label>
				</div>
					
				<div class="center">
				<input type="checkbox" name="">
				</div>
				<a href="home.php"><input type="submit" name="sign_in" value="Sign In"></a>
			</form>
		</div>




	</body>
</html>
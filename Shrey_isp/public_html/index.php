<?php
	session_start();
if(isset($_POST['enum']))
{
	$rollno=$_POST['enum'];
	$pass=$_POST['pass'];
	$conn=mysqli_connect("localhost","id6756811_root","9755505055","id6756811_school");
	$_SESSION["secret"] = $rollno;
	$q="select rollno,pass from registration where rollno='$rollno' and pass='$pass'";
	
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
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
 
		<div class="box">
			<h2>Login </h2>
			<form method="post" id="form1">
				
				<div class="inputBox">
					<input type="text" name="enum" required="">
					<label>Enrolment No</label>
				</div>
				<div class="inputBox">
					<input type="password" name="pass" required="">
					<label>Password</label>
				</div>
					
				<div class="center">
				<input type="checkbox" name="" required="">
				</div>

				<table
				align="right">
				<tr>
				<td>
				<a href="home.php"><input type="submit" name="sign_in" value="Sign In"></a>
				</td><td><a href="registration.php"><input type="button" name="sign_up" value="Sign Up"></a>
				</td></tr>
				<tr align="center"></tr><tr><td></td> <td>
			<!--	<a href="alogin.php"><input type="button" name="alogin" value="Admin Login"></a> -->
				</td>
				</tr>
				</table>
			    
			</form>
		</div>




	</body>
</html>
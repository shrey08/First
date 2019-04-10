<?php
if(isset($_POST['enum']))
{
	$full_name=$_POST['full_name'];
	$fname=$_POST['fname'];
	$enum=$_POST['enum'];
	$sem=$_POST['sem'];
	$gender=$_POST['gender']; 
	$password=$_POST['password'];
	$conn=mysqli_connect("localhost","id6756811_root","9755505055","id6756811_school");
	$q="insert into registration values('$full_name','$fname','$enum','$sem','$gender','$password')";
	$res=mysqli_query($conn,$q);
	if($res>0)
	{	//echo "Registration Successful";
		header('location:index.php');
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
		<title>Intensify Sign up</title>
		<link rel="stylesheet" href="registration.css">
	</head>
	<body>
 
		<div class="box">
			<h2>Registration</h2>
			<form method="post" id="form1">
				
				<div class="inputBox">
					<input type="text" name="full_name" required="">
					<label>Full Name</label>
				</div>
				<div class="inputBox">
					<input type="text" name="fname" required="">
					<label>Father's Name</label>
				</div>
				<div class="inputBox">
					<input type="text" name="enum" required="">
					<label>Enrollment Number</label>
				 </div>
			
				<div class="inputBox">
					<input type="number" name="sem" min="1" max="8" required="">
					<label>Semester</label>
				</div>

			<div class="radio" bottom="15%"  left="50%">
				<label>Gender</label>
					<table cellspacing="15">
						<tr><td><input type="radio" name="gender" required=""><td><td><div class="white">Male</div></td><td></td><td></td><td></td>
					<td><input type="radio" name="gender" required=""><td><div class="white">Female</div></td></td></tr></table>
					
				</div>
 


				<div class="inputBox">
					<input type="password" name="password" required="">
					<label>Password</label>
				</div>
				<div class="inputBox">
					<input type="password" name="repassword" required="">
					<label>Re-Password</label>
				</div>

					
				<div class="center">
				<input type="checkbox" name="checkbox" required="" >

				</div>

				<input type="submit" name="submit" value="Submit"></td>
					

			    
			</form>
		</div>




	</body>
</html>
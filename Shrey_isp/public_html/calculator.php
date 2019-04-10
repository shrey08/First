<?php
$a=0;
$b=0;
$per=0.0;
$p=0.0;
$percentage1=0.0;
if(isset($_POST["sub"]))
{
$t=$_POST["t"];
$p=$_POST["p"];



$per=($p*100)/$t;
$percentage1=$per;
if($per<75)
{
while((int) $per!=75)
{
$t++;
$p++;
$per=($p*100)/$t;
$a++;
}
}
else
{
while((int) $per!=75)
{
$t++;
$per=($p*100)/$t;
$b++;
}
}
}
?>
<html>
<head>
	<title>Intensify Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>
<!--
	Header
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">intensify</a>
				<nav class="right">
					<a href="index.php" class="button alt">Log Out</a>
				</nav>
			</header>

		<!-- Menu
			<nav id="menu">
				<ul class="links">
					<li><a href="home.html">Home</a></li>
<!--
					<li><a href="profile.html">Profile</a></li>

					<li><a href="lboard.html">Leaderboard</a></li>
					
					<li><a href="chatroom/index.php">Chat</a></li>
					<li><a href="">INFO</a></li>
					<li><a href="calculator.php" >Attendance Calculator</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php" class="button fit">Log Out</a></li>
				</ul>
				
			</nav>
-->

<body style="background-image:url(images/content.jpg)">
	

	<div class="content-agileits">
		<h1 class="title">Student Attendance Calculator</h1>
		<br>
	
		<center><div class="left" align="center">
			<form action="#" method="post" data-toggle="validator" align="center">
				<div class="form-group">
					<label for="Total Periods" class="control-label">NO. of Total Classes / Periods</label>
					<input type="numeric" name="t" class="form-control" id="firstname" placeholder="Total Classes" data-error="Enter Total Classes" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="NO. Of Classes Attended" class="control-label">NO. Of Classes Attended:</label>
					<input type="numeric" name="p" class="form-control" id="lastname" placeholder="NO. Of Classes Attended" data-error="NO. Of Classes Attended" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<button type="submit" name="sub" class="btn btn-lg">submit</button>
				</div>
				<div class="form-group">
					<label for="Your Percentage" class="control-label">Your Percentage</label>
					<input type="numeric" name="per" class="form-control" id="inputEmail" placeholder="Your Percentage" value="<?php echo $percentage1; ?>" readonly>
					<div class="help-block with-errors"></div>
				</div>
			<!--	<div class="form-group">
					<label for="NO. Of Classes YOU can bunk" class="control-label">NO. Of Classes YOU can Escape</label>
					<input type="numeric" name="a" class="form-control" value="<?php echo $b; ?>" id="Phone" placeholder="NO. Of Classes YOU can Bunk" readonly>
					<div class="help-block with-errors"></div>
				</div>
				-->
				<div class="form-group">
					<label for="NO. Of Classes YOU Must Attend" class="control-label">NO. Of Classes YOU Must Attend</label>
					<input type="numeric" name="b" class="form-control" value="<?php echo $a; ?>" id="Phone" placeholder="NO. Of Classes YOU must attend" readonly>
					<div class="help-block with-errors"></div>
				</div>
				
				
			</form>
		</div>
		<div class="right"></div>
		<div class="clear"></div>
	</div>
	<center>
	
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.min.js"></script>
	<!-- /js files -->
</body>
</html>
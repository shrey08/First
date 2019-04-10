<?php
session_start();
?>
<html>
	<head>
		<title>Student Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css">

.ed{
border-style:solid;
border-width:thin;
width:50%;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;

}
#imagelist{
border: thin solid silver;
float:left;
padding:10px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}

</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">intensify</a>
				<nav class="right">
					<a href="http://itm-isp.000webhostapp.com" class="button alt">Log Out</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../home.html">Home</a></li>
<!--
					<li><a href="profile.html">Profile</a></li>

					<li><a href="lboard.html">Leaderboard</a></li>
					-->
					<li><a href="../timetable.html">Time Table</a></li>
					<li><a href="../result.html">Result</a></li>
					<li><a href="../chatroom/index.php">Chat</a></li>
					<li><a href="../home.html#three">INFO</a></li>
					<li><a href="../calculator.php" >Attendance Calculator</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php" class="button fit">Log Out</a></li>
				</ul>
				
			</nav>

		<!-- Timetable -->
			<section id="banner">
				<div class="content">
					<h1>My Documents</h1>
					<p>ITM GROUP OF INSTITUTION</p>
				


<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 <input type="file" name="image" class="ed" ><br />
 Caption<br />
 <input name="caption" class="ed" id="brnu" width="300px"/>
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>
<br />
Photo Archieve
<br />
<?php
$id=$_SESSION["secret"];
echo $id;
include('config.php');
$result = $mysqli->query("SELECT * FROM photos where id= '$id'");
while($row = $result->fetch_assoc())
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'" height="225px"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
?>
</div>
</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
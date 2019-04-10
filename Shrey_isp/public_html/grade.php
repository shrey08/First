<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Quiz</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">intensify</a>
				<nav class="right">
					<a href="index.php" class="button alt">Log Out</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.html">Home</a></li>
<!--
					<li><a href="profile.html">Profile</a></li>

					<li><a href="lboard.html">Leaderboard</a></li>
					-->
					<li><a href="quiz.html">Quiz</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php" class="button fit">Log Out</a></li>
				</ul>
			</nav>
		<!-- BODY -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<div id="page-wrap">
		<h1>Intensify wishes you All the best for your future endeavors.</h1>
        		<h1>Here's is the result:</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            if($totalCorrect>=3) {echo "<h1>marvellous</h1>";}
            else {echo "<h1>Need imrpovement</h1>";}
            echo '<div id="results">'.$totalCorrect.' / 5 correct</div>';
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>


		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">+91-97555050555</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">intensify@itmgoi.com</a></li>
						<li><span class="icon fa-map-marker"></span> New Boys Hostel, Itm-Goi, Gwalior-474001</li>
					</ul>
				</div>
				
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
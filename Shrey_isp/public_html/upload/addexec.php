<?php
session_start();
include('config.php');
if(!isset($_FILES['image']['tmp_name'])){
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name=addslashes($_FILES['image']['name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
			$location="photos/".$_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$id=$_SESSION["secret"];
			$save= $mysqli->query("INSERT INTO photos (id,location, caption) VALUES ('$id','$location','$caption')");
			header("location:index.php");
			exit();					
	}
?>

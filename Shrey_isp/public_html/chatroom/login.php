<?php
session_start();
include('db.php');
$uname=$_POST['uname'];
$pass=$_POST['Password'];

$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()){
    echo "error";
}
else{
    
    $_SESSION['name']=$_POST['uname'];
    
    header("Location:home.php");
}

?>
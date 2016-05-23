<?php
$con=new mysqli('localhost','root','','myt');
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$r_password=$_POST['r_password'];
$query="INSERT INTO users VALUES(null, '$name','$email','$password')";
if($r_password==$password){
	$con->query($query);
	header("Location:profile.php");
}
?>
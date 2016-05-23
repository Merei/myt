<?php 
	include 'connection.php';
	session_start();
	$list = $_POST['list'];
	$id = $_SESSION['id'];
	$sql = "INSERT INTO lists VALUES(null, '$id', '$list')";
	if ($con->query($sql)){
		header("Location:profile.php");
	}else echo "something wrong";
 ?>
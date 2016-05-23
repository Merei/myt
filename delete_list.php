<?php include "connection.php";
		session_start();
		$id = $_GET['id'];
		$sql = "DELETE FROM lists WHERE id='$id'";
		if($con->query($sql)){
			header("Location:profile.php");}
		else echo 'wrong';
	 ?>
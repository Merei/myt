<?php include "connection.php";
		session_start();
		$rename_list = $_GET['list'];
		$id = $_GET['id'];
		$sql = "UPDATE lists SET list_title='$rename_list' WHERE id='$id'";
		if($con->query($sql)){
			header("Location:profile.php");}
		else echo 'wrong';
	 ?>
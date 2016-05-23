<?php 
	include 'connection.php';
	session_start();
	$new_task = $_POST['task'];
	$list_id = $_SESSION['list_id'];
	$deadline = $_POST['deadline']
	// $start_date = $_SESSION['list_id'];  current time
	// $deadline = $_SESSION['deadline'];
	// $id = $_SESSION['list_id'];   REASON and IMAGE
	$sql = "INSERT INTO tasks VALUES(null, '$list_id', '$new_task', null, '$deadline')";
	if ($con->query($sql)){
		header("Location:profile.php");
	}else echo "something wrong(task)";
 ?>
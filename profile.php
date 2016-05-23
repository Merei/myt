
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/profile_style.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	 <link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/checked.png">
</head>
<body>
<div class="navbar navbar-fixed-top" role="navigation">
		<ul class="nav navbar-nav navbar-left">
			<li><a href="" id="" class="submenu" data-icon="&#xe012;"></a></li>
			<li>
				<a class="navbar-brand" href="index.html"><span class="content-to-hide"><img width="25px" src="img/checked_white.png">Manage your time</span></a>
			</li>
		</ul>
	<ul class="nav navbar-nav navbar-right">
					<li><a href="" data-icon="&#xe04f;"></a></li>
					<li><a href="" data-icon="&#xe051;" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px;"></a>
						<ul class="dropdown-menu dropdown-menu-right sett">
						<li><a href="#">Edit Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logout.php">Log out</a></li>
				</ul></li>
				</ul>
</div>
<div style="height:50px;"></div>

<div class="container" id="left-side">
	<div class="row">
		<div class="col-md-3 col-sm-3 hide-content" id="maindiv">
		<!-- SIDEBAR MENU -->
<div class="list-group">
	<h2 class="list-group-item">
	<img src="img/Avatar_Dog-512.png" alt="..." class="img-circle">
			<?php 
		session_start();
		$email =  $_SESSION['email'];
		echo $email;
		?>
	</h2>
	<a href="#" class="list-group-item">Today<span class="badge">14</span></a>
	<a href="#" class="list-group-item">Next 7 days<span class="badge">14</span></a>
</div>













<div class="list-group">
	<h2 class="list-group-item">Lists</h2>
	<?php  
		include 'connection.php';
		$id = $_SESSION['id'];
		$sql = "SELECT * from lists where user_id='$id'";
		$result = $con->query($sql);
		$llist = 0;
		while(mysqli_num_rows($result)>$llist){
			$row = $result->fetch_array();
			echo "<a href='#' class='list-group-item'>$row[list_title]<span class='badge'><a href='delete_list.php?id=$row[id]' data-icon='&#xe0b3;'></a>
			<a href='update_list.php?id=$row[id]' data-icon='&#xe019;'></a>14</span></a>";
			$llist ++;
		}
	?>
	<div class="input-group">
	<form method="POST" action="addlist.php">
		<input type="text" class="form-control" placeholder="Enter a list title" name="list">
		<input class="btn btn-secondary" type="submit" value="+Add a list">
	</form>
	</div><!-- /input-group -->
</div>
</div>












		<div class="col-md-9">
		<h2>Name of List <span data-icon="&#xe072;"></span></h2>
			<div class="input-group">
			<form method="POST" action="addtask.php">
				<input type="text" class="form-control" aria-label="..." name="task">
			 </form>
				<div class="input-group-btn">
				<!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
				<button class="" type="button">Go!</button> -->
					<input class="btn btn-secondary" type="date" name="deadline">
					<input class="btn btn-secondary" type="submit" name="task" value="+Add Task">

				</div><!-- /btn-group -->
			</div><!-- /input-group -->
				<?php  
		include 'connection.php';
		$id = $_SESSION['id'];
		$sql = "SELECT * from tasks where list_id='$id'";
		$result = $con->query($sql);
		$ttask = 0;
		while(mysqli_num_rows($result)>$ttask){
			$row = $result->fetch_array();
			echo "<span class='list-group-item'>$row[task]
			<span class='badge'><a href='delete_task.php?id=$row[id]' data-icon='&#xe0b3;'></a>
			<a href='update_task.php?id=$row[id]' data-icon='&#xe019;'></a></span>";
			$ttask ++;
		}
	?>
			</div>
	</div><!-- /.row -->
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script>
$(document).ready(function(){
	$('.submenu').click(function(){
	$("#maindiv").slideToggle();
	return false;
	});
 
});
</script>
</body>
</html>
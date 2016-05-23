<?php
$name=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE email='$name' AND password='$password'";
$con=new mysqli('localhost','root','','myt');
$result=$con->query($query);
if(mysqli_num_rows($result)>0){
	$row = $result->fetch_array();
	session_start();
	$_SESSION['email']=$name;
	$_SESSION['id'] = $row['id'];
	header("Location:profile.php");
}
else{
	echo'email or password is invalid';
}
?>
<?php 
if (isset($_SESSION['login_btn'])) {
$email = $_POST['email']; 
$password = $_POST['password']; 
$msg ='';
if(isset($email) && isset($password)) {
    include('connection.php'); 
    $thisemail = stripslashes($email);
    $thispassword = stripslashes($password);
    $thisemail = mysqli_real_escape_string($dbC, $thisemail);
    $thispassword = mysqli_real_escape_string($dbC, $thispassword);
    $sql="SELECT * FROM users WHERE email='$thisemail' and password='$thispassword'";
    $result=mysqli_query($dbC, $sql);
    $count=mysqli_num_rows($result);
    print_r($result);
    if($count==1){
      $row = $result->fetch_array();
      session_start();
      $_SESSION['email'] = $row['email'];
      $_SESSION['type'] = $row['type'];
      if($row['type']==1){
        header("Location:index1.php");
      }else{
        header("Location:index2.php");
      }
    }
    else {
      $msg = "Wrong Username or Password. Please retry";
    }
  }
  else {
    header("location:login.php?msg=Please enter some email and password");
  }
  }
  ?>
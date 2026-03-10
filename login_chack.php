<?php session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect("localhost","root","","grocery");
	$s = mysqli_query($con,"select * from register where username='$username' and password='$password'");
	if($r = mysqli_fetch_array($s))
	{
		$_SESSION['user']=$uid;	
		header("location:index.php");
	}
	else
	{
		
		header("location:login.php");
	}

?>
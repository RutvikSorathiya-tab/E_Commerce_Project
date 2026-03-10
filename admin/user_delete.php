<?php

	$i = $_REQUEST['i'];
	$c= mysqli_connect("localhost","root","","grocery");
	mysqli_query($c,"delete from register where id='$i'");
	header("location:user.php");
?>
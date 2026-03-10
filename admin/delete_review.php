<?php

	$i = $_REQUEST['i'];
	$c= mysqli_connect("localhost","root","","grocery");
	mysqli_query($c,"delete from reviews where id='$i'");
	header("location:review.php");
?>
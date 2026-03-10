<?php
  session_start();
  if(isset($_SESSION['sg']))
   {
     $i = $_REQUEST['i'];
	  $c= mysqli_connect("localhost","root","","grocery");
	  mysqli_query($c,"delete from product where id='$i'");
	  header("location:product.php");
    }
  else
  {
     header("Location:index.php");
  }
  ?>
?>
<!----------- [ Admin Login Chack File ] -------------->
<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $con = mysqli_connect("localhost","root","","grocery");

        $ad = mysqli_query($con,"select * from admin where username='$username' and password='$password'");
        if($a = mysqli_fetch_array($ad))
        {
            $_SESSION['sg']= $a['username'];
            header("Location:dashbord.php");
        }
        else
        {
            echo "<script>alert('Please Enter Your Valid Username And Password....')</script>";
            include "index.php";
        }
    }
?>
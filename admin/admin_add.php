<?php 
  session_start();
  if(isset($_SESSION['sg']))
  {
    include"header.php" 
?> 
<style>
        * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    }

    body {
    background-color: #f2f2f2;
    align-items: center;
    }

    .form-container {
    margin-left:20%;
    padding: 30px;
    border-radius: 8px;
    }

    .form-container h2 {
    margin-bottom: 20px;
    color: #333;
    font-size:40px;
    text-align:center;
    }

    form label {
    display: block;
    margin-top: 15px;
    color: #555;
    }

    form input,
    form select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    form button {
    margin-top: 20px;
    margin-left:30%;
    width: 50%;
    padding: 12px;
    background-color: #046b32ff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    }

    form button:hover {
    background-color: #20a80bff;
    }

</style>

<body>
  <div class="form-container">
    <h2>Add Admin User</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
     
    

      <label for="username">Username</label>
      <input type="text" name="username" required>

      <label for="password">Password</label>
      <input type="password"  name="password" required>

      <button type="submit" name="sb">Add User</button>
    </form>
  </div>
</body>


<!-- [ Database Connectivity ] -->
<?php
  if(isset($_POST['sb']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];	

    $c= mysqli_connect("localhost","root","","grocery");
    mysqli_query($c,"insert into admin(username,password) values('$username','$password')");
    header("location:admin_user.php");
  }
?>

<!-- [ Session Section ] -->
  <?php
  }
  else
  {
     header("Location:index.php");
  }
  ?>
</body>

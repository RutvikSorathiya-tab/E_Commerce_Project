<?php
 include 'header.php'; 
  error_reporting(0);
  session_start();
 ?>

<style>
  * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .b body {
    background-color: #f2f2f2;       
    justify-content: center;    
    align-items: center;        
    min-height: 200vh;          
    margin: 0;
  }

  .form-container {
    margin-left:30%;
    padding: 100px;
    border-radius: 8px;
  }

  .form-container h2 {
    margin-bottom: 20px;
    color: #333;
    font-size:40px;
    margin-left:13%;
  }

  form label {
    display: block;
    margin-top: 15px;
    color: #555;
  }

  form input,
  form select {
    width: 50%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 10px;
  }

  form button {
    margin-top: 20px;
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

<body class="b">
  <div class="form-container">
    <h2>Register Form</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

      <label for="fullname">Full Name</label>
      <input type="text" name="fullname" required>

      <label for="email">Email</label>
      <input type="email"  name="email" required>

      <label for="password">Password</label>
      <input type="password"  name="password" required>

      <button type="submit" name="sb">Register Now...</button>
    </form>
  </div>
</body>

<!-- [ Database Connectivity ] -->
<?php
  if (isset($_POST["sb"])) 
  {
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $password = $_POST['password']; 

    // Connect to DB
    $c = mysqli_connect("localhost", "root", "", "grocery");

    if (!$c) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Insert query
    $qry = "INSERT INTO register (fullname,email,password) 
            VALUES ('$fullname','$email','$password')";
    
    if (mysqli_query($c, $qry)) {
      echo "<script>
              alert('User registration successful');
              window.location.href='profile.php';
            </script>";
    } 
?>

<?php 
  include 'header.php'; 
  include 'db.php';
  session_start();
?>

<style>
  * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  body {
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    display: flex;
    align-items: center;
    flex-direction: column;
  }

  /* Form box */
  .form-container {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    width: 100%;
    max-width: 400px;
    margin-top: 180px; 
    text-align: center;
  }

  .form-container h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 32px;
  }

  form label {
    display: block;
    margin-top: 15px;
    color: #555;
    text-align: left;
  }

  form input {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  form button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background-color: #046b32ff;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
  }

  form button:hover {
    background-color: #20a80bff;
  }
</style>

<body>
  <div class="form-container">
    <h2>Login Form</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="fullname">Username</label>
      <input type="text" name="fullname" required>

      <label for="password">Password</label>
      <input type="password" name="password" required>

      <button type="submit" name="sb">Login Now...</button>
    </form>
  </div>
</body>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM register WHERE fullname='$fullname' AND password='$password'");

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id']; 
        $_SESSION['fullname'] = $row['fullname'];

        echo "<script>
            alert('Login successful');
            window.location.href='profile.php';
        </script>";
        exit;
    }
    else
    {
        echo "<script>
            alert('Invalid username or password');
            window.location.href='login.php';
        </script>";
        exit;
    }
  }
?>
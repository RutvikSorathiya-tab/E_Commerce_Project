<!DOCTYPE html>
<html>
<style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

   body {
      background-color: #f5f5f5;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 0
    }

    .container {
      display: flex;
      width: 100%;
      background-color: white;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      margin: 50px auto;
    }

    .left {
      flex: 1;
      background-color: #136935e3;
      color: white;
      padding: 40px 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .left h2 {
      margin-bottom: 15px;
      font-size:30px;
      text-align:center;
    }

    .left p {
      font-size: 16px;
      line-height: 1.6;
      text-align:center;
    }

    .right {
      flex: 1.5;
      padding: 40px 30px;
    }

    .right h2 {
      margin-bottom: 25px;
      color: #333;
      font-size:30px;
      text-align:center;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #444;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 15px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      margin-top: 25px;
      padding: 12px;
      width: 100%;
      background-color: #136935e3;
      color: white;
      border: none;
      font-size: 20px;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #3e8e41;
    }

</style>
<body>

  <div class="container">
    <!-- Left side with paragraph -->
    <div class="left">
      <h2>Your Opinion Matters</h2>
      <p>
        We are always looking to improve our service and product quality. <br>
        Please take a moment to share your experience with our grocery store.
      </p>
    </div>

    <!-- Right side with form -->
    <div class="right" >
      <h2>Feedback Form</h2>
      <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Your email" required>

        <label for="message">Your Feedback</label>
        <textarea name="message" placeholder="Write your feedback..." required></textarea>

        <button type="submit" name="submit">Submit Feedback</button>
      </form>
    </div>
  </div>

  <!-- Show feedback message in JS -->
  <?php if (!empty($messageFeedback)) { ?>
    <script>
      alert("<?php echo $messageFeedback; ?>");
    </script>
  <?php } ?>

</body>
</html>
 <!-- [ PHP Database Connection ] -->
<?php
  error_reporting(0);
  session_start();
  $con = mysqli_connect("localhost","root","","grocery");

  if (isset($_POST['submit'])) {
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $messageText = mysqli_real_escape_string($con, $_POST['message']);

      // Insert into database
      $qry = "INSERT INTO reviews(name,email,message) VALUES ('$name','$email','$messageText')";
      
      if (mysqli_query($con, $qry)) {
          echo "<script>
              alert('✅ Thank you! Your feedback has been submitted.');
              window.location.href='index.php';
          </script>";
      } else {
          echo "<script>
              alert('❌ Error: ".mysqli_error($con)."');
          </script>";
      }
  }
?>

?>

<?php 
  session_start();
  if(isset($_SESSION['sg']))
  {
    include"header.php" 
    ?> 

    <!------------ Using Css ------->
    <link rel="stylesheet" type="text/css" href="css/dashbord.css">

    <body>
    
      <div class="main">
        <header>
          <h1>Dashbord</h1>
          <h2>Admin</h2>
        </header>

        <div class="dashboard">
          <div class="card">
            <h3>Total Users</h3>
            <p></p>
          </div>
          <!-- <div class="card">
            <h3>Orders Today</h3>
            <p></p>
          </div> -->
          <div class="card">
            <h3>Revenue</h3>
            <p></p>
          </div>
          <div class="card">
            <h3>Product</h3>
            <p></p>
          </div>
        </div>
      </div>

    
    <?php
  }
  else
  {
     header("Location:index.php");
  }
  ?>
</body>
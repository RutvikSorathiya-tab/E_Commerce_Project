<?php 
  session_start();
  if(isset($_SESSION['sg']))
  {
    include"header.php" 
    ?> 

<style>

    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
  }

  body {
    display: flex;
    min-height: 100vh;
    background-color: #f9f9f9;
  }

  /* Main */
  .main {
    margin-left: 220px;
    padding: 30px;
    width: 100%;
  }

  header {
    display: flex;
    justify-content: space-between;
    background-color:  rgb(43, 102, 34);
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  }

  header h1 {
    font-size: 40px;
    color: #f6f6f6;
  }
  header h2 {
    font-size: 20px;
    color :#f7f6f6;
    margin-top: 14px;
  }

  .a {
      height: 70px;
      color: #c7cfcbff;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      font-size:30px;
    }
    

  /* Table */
  .table-container {
    background-color:  rgb(201, 193, 193);
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  table th, table td {
    padding: 12px 15px;
    text-align: left;
  }

  table th {
    font-size: 20px;
    background-color:  rgb(201, 193, 193);
    color: #383737;
  }
   
   .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: white;
      margin-right: 5px;
   }

   .btn-delete {
      background: #c0392b;
      text-decoration: none;
   }

   .btn-delete:hover {
      background: #e74c3c;
   }

  .btn-edit {
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
  }

  .btn-edit:hover {
    background-color: #2980b9;
  }
</style>

<body>

  <!-- Main Content -->
   <div class="main">
    <header>
      <h1>Admin User</h1>
      <a href="admin_add.php" class="a">+Add</a>
    </header>
     

  <!-- [ Database Connectivity ] -->
   <?php
      $host = "localhost";
      $user = "root";
      $password = "";
      $dbname = "grocery";

      $connection = mysqli_connect($host,$user,$password,$dbname);

      $query = "SELECT * FROM admin";
      $query_run = mysqli_query($connection ,$query);

    ?>


    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Paaswoer</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
          <?php
             if(mysqli_num_rows($query_run) > 0)
             {
                while($row = mysqli_fetch_assoc($query_run))
                {
                  ?>
          <tr>
            <td><?php echo $row[ 'id'] ?></td>
            <td><?php echo $row[ 'username'] ?></td>
            <td><?php echo $row[ 'password'] ?></td>

             <td>
              
              <a href="admin_delete.php?i=<?php echo $row[ 'id'] ?>"  class="btn btn-delete"> Delete</a>
                
            </td>
          </tr>
          <?php
                }
             }
             else{
              echo "No Record Found";
             }
          ?>
        </tbody> 
    </div>
  </div>


<!-- [ Session Section ] -->
  <?php
  }
  else
  {
     header("Location:index.php");
  }
  ?>
</body>


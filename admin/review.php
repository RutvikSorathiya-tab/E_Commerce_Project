<?php 
session_start();
if (isset($_SESSION['sg'])) {
    include "header.php"; 
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
    background-color: rgb(43, 102, 34);
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
    color: #f7f6f6;
    margin-top: 14px;
  }

  /* Table */
  .table-container {
    background-color: rgb(201, 193, 193);
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
    border-bottom: 1px solid #ccc;
  }

  table th {
    font-size: 20px;
    background-color: rgb(201, 193, 193);
    color: #383737;
  }

  .delete-btn {
    display: inline-block;
    padding: 6px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    background-color: #e74c3c;
    color: #fff;
    text-decoration: none;
    transition: background 0.3s;
  }

  .delete-btn:hover {
    background-color: #c0392b;
  }
</style>

<body>
<!-- Main Content -->
  <div class="main">
    <header>
      <h1>Reviews</h1>
      <h2>Admin</h2>
    </header>
    
     
    <?php
      $host = "localhost";
      $user = "root";
      $password = "";
      $dbname = "grocery";

      $connection = mysqli_connect($host,$user,$password,$dbname);

      if (!$connection) {
        die("<div style='color:white;background:red;padding:10px;'>Database Connection Failed</div>");
      }

      $query = "SELECT * FROM reviews ORDER BY id DESC";
      $query_run = mysqli_query($connection ,$query);
    ?>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
             if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['message']); ?></td>
            <td>
                <a href="delete_review.php?i=<?php echo $row['id']; ?>" 
                   class="delete-btn"
                   onclick="return confirm('Are you sure you want to delete this review?');">
                   Delete
                </a>
            </td>
          </tr>
          <?php
                }
             } else {
                echo "<tr><td colspan='5' style='text-align:center;'>No Record Found</td></tr>";
             }
          ?>
        </tbody> 
      </table>
    </div>
  </div>

<?php
} else {
   header("Location:index.php");
}
?>
</body>

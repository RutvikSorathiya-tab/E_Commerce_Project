<?php 
session_start();
if (isset($_SESSION['sg'])) {
    include "header.php"; 
?>

<style>
   body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f8;
      display: flex;
   }

   /* Main content */
   .main {
      margin-left: 240px;
      padding: 30px;
      flex: 1;
   }

   .main header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
      background: rgb(43, 102, 34);
      color: #f4f6f8;
      padding: 15px 20px;
      border-radius: 10px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
   }
    
   .main h1{
      font-size: 40px;
      color: #f6f6f6;
   }
   
    .main header h2 {
        font-size: 20px;
        color: #f7f6f6;
        margin-top: 14px;
    }

   .table-container {
      background: rgb(201, 193, 193);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
   }

   table {
      width: 100%;
      border-collapse: collapse;
   }

   table th, table td {
      font-size: 17px;
      padding: 12px;
      border-bottom: 2px solid #4a3636;
      text-align: left;
   }

   table th {
      background: rgb(201, 193, 193);
   }

   .product-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 4px;
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
      <h1>Show Oeder</h1>
      <h2>Admin</h2>
    </header>

   <?php
      $host = "localhost";
      $user = "root";
      $password = "";
      $dbname = "grocery";

      $connection = mysqli_connect($host,$user,$password,$dbname);
      $query = "SELECT * FROM odear_now";
      $query_run = mysqli_query($connection ,$query);
   ?>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Rupees</th>
            <th>Quenity</th>
            <th>Total</th>
            <th>Method</th>
            <th>Address</th>
            <th>Number</th>
            <th>Method</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td> <img src="p_image/<?php echo $row['image']; ?>" class="product-img">
                </td>
                <td><?php echo $row['name']; ?></td>
                <td>₹<?php echo $row['rupees']; ?></td>
                <td><?php echo $row['quentity']; ?></td>
                <td>₹<?php echo $row['total']; ?></td>
                <td><?php echo $row['pay_method']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td>
                  <a href="deleteorder.php?i=<?php echo $row['id']; ?>" 
                    class="btn btn-delete"
                    onclick="return confirm('Are you sure you want to delete this product?');">
                    Delete
                  </a>
                </td>

            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'>No Record Found</td></tr>";
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

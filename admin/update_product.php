<?php
include 'header.php';
include 'db.php';

// Sanitize ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM product WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>


<style>
   body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f8;
      display: flex;
   }

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
    
   .main h1 {
      font-size: 40px;
      color: #f6f6f6;
   }

   .main header h2 {
        font-size: 20px;
        color: #f7f6f6;
        margin-top: 14px;
    }
   .table-container {
     text-align:center;
      background: rgb(201, 193, 193);
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
   }

   h2 {
      margin-bottom: 20px;
      color: #2b6622;
   }
  
    h3 {
      text-align:center;
      font-size:40px;
      color: #2b6622;
      padding:40px;
   }
   img {
      border-radius: 10%;
      box-shadow: 0px 0px 10px #ccc;
   }

   label {
      font-weight: bold;
      color: #333;
      font-size:20px;
   }

   .one {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      width:10%;
      font-size: 16px;
      margin-top: 5px;
   }

   .one:focus {
      outline: none;
      border-color: #136935;
      box-shadow: 0px 0px 5px #136935;
   }

   input[type=submit] {
      padding: 12px 25px;
      font-size: 20px;
      margin-top: 20px;
      border: none;
      cursor: pointer;
      color: white;
      background: #136935;
      border-radius: 10px;
   }

   input[type=submit]:hover {
      background-color: #0a3b1e;
   }
</style>

<body>
  <!-- Main Content -->
  <div class="main">
    <header>
      <h1>Update Order</h1>
      <h2>Product Admin </h2>
    </header>

    <div class="table-container">
      <?php if ($row) { ?>
        <form action="" method="post">
          <h3>Update Product</h3>
          <img src="p_image/<?=($row['image']) ?>" width="200" height="200"><br><br>

          <input type="hidden" name="id" value="<?= $row['id'] ?>">

          <p><label>Name:</label> <?=($row['name']) ?></p>
          <p><label>Category:</label> <?=($row['category']) ?></p>

          <p>
            <label><b>Price:</b></label><br>
            <input type="text" class="one" name="price" 
                   value="<?=($row['price']) ?>" 
                   placeholder="Enter Product Price" required>
          </p>

          <input type="submit" value="Update Now" name="submit">
        </form>
      <?php } ?>
        
    </div>
  </div>
</body>



<?php
if (isset($_POST['submit'])) {
    $id    = intval($_POST['id']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $qry = "UPDATE product SET price='$price' WHERE id='$id'";
    $res = mysqli_query($con, $qry);

    if ($res) {
        echo "<script>
                alert('✅ Product updated successfully!');
                window.location.href='product.php';
              </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


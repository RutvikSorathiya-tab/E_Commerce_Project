<!DOCTYPE html>
<html>
<style>
  /* Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Global Styles */
  body {
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
  }

  h1 {
    text-align: center;
    margin-bottom: 50px;
    font-size: 2.8rem;
    color: #136935;
    font-weight: 700;
    letter-spacing: 1px;
  }

  /* Product Grid */
  .product-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    max-width: 1400px;
    margin: auto;
    padding: 10px;
  }

  /* Product Card */
  .product-card {
    background: #ffffff;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
  }

  /* Image */
  .product-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .product-card:hover .product-image {
    transform: scale(1.05);
  }

  /* Info */
  .product-info {
    padding: 20px;
    text-align: center;
  }

  .product-info h3 {
    font-size: 2.3rem;
    color: #136935;
    margin-bottom: 10px;
    font-weight: 600;
  }

</style>

<body class="sc">

  <h1>Our Categories</h1>

  <div class="product-container">
    <!-- Product 1 -->
    <div class="product-card">
      <a href="product.php">
        <img src="Image/fruit_image.jpeg" class="product-image" alt="Fresh Fruits">
      </a>
      <div class="product-info">
        <h3>Fresh Fruits</h3>
        
      </div>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
      <a href="product.php">
        <img src="Image/vegetable_image.jpeg" class="product-image" alt="Green Vegetables">
      </a>
      <div class="product-info">
        <h3>Green Vegetables</h3>
        
      </div>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
      <a href="product.php">
        <img src="Image/dryfood_image.jpeg" class="product-image" alt="Dry Fruits">
      </a>
      <div class="product-info">
        <h3>Dry Fruits</h3>

      </div>
    </div>
  </div>

</body>
</html>

<!----- [ Using Css ] ----->
<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: 'Arial, Helvetica, sans-serif';
    background: #f4f7fb;
    color: #333;
  }

  .sf h1 {
    text-align: center;
    color: #136935;
    margin: 40px 0 50px;
    font-size: 69px;
    font-weight: 700;
    letter-spacing: 1px;
  }

  .features-grid {
    display: grid;
    gap: 60px;
    max-width: 1100px;
    margin: auto;
    padding: 0 20px 60px;
  }

  .feature-box {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    padding: 50px 25px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .feature-img {
    width: 130px;
    height: 130px;
    object-fit: contain;
    margin-bottom: 20px;
  }

  .feature-title {
    font-size: 35px;
    font-weight: 600;
    color: #222;
    margin-bottom: 12px;
  }

  .feature-desc {
    font-size: 25px;
    color: #136935;
    margin-bottom: 25px;
    line-height: 1.6;
  }

  /* Read More Button */
  .read-btn {
    display: inline-block;
    padding: 10px 25px;
    font-size: 15px;
    border-radius: 50px;
    background: #136935;
    color: #fff;
    border: none;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .read-btn:hover {
    background: #0d4f27;
    box-shadow: 0 5px 15px rgba(19, 105, 53, 0.3);
    transform: scale(1.05);
  }

</style>

<body class="sf">
  <div>
    <h1>🛒 Shopping Features</h1>
    <div class="features-grid">

      <div class="feature-box">
        <img class="feature-img" src="Image/time.png" alt="Product Catalog">
        <div class="feature-title">Save Time</div>
        <div class="feature-desc">⏱️ Save time, skip the lines — shop online with ease.</div>
        <a href="#read-time" class="read-btn">Read More</a>
      </div>

      <div class="feature-box">
        <img class="feature-img" src="Image/family.png" alt="Shopping Cart">
        <div class="feature-title">Family</div>
        <div class="feature-desc">👨‍👩‍👧‍👦 Made for busy families — shop once, relax more.</div>
        <a href="#read-family" class="read-btn">Read More</a>
      </div>

      <div class="feature-box">
        <img class="feature-img" src="Image/food.png" alt="User Account">
        <div class="feature-title">Healthy Food</div>
        <div class="feature-desc">🥕 Eat fresh, feel great — your wellness starts here.</div>
        <a href="#read-food" class="read-btn">Read More</a>
      </div>

    </div>
  ss</div>
</body>

<!-- [ Header File Section ] -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Poppins', sans-serif; 
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }

  /* Header Container */
  .header {
    position: fixed;
    width: 100%;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #136935; 
    /* color: #ffffff;  */
    padding: 15px 30px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
  }

  /* Logo */
  .logo {
    font-size: 35px;
    font-weight: 700;
    color: #ffffff; 
    letter-spacing: 1px;
  }

  /* Search Bar */
  .search-bar {
    flex: 1;
    text-align: center;
  }

  .search-bar input {
    width: 55%;
    padding: 10px 14px;
    border-radius: 25px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 15px;
    transition: 0.3s;
    font-family: 'Poppins', sans-serif;
  }

  .search-bar input:focus {
    border-color: #ffffff;
    box-shadow: 0 0 6px rgba(255, 255, 255, 0.4);
  }

  /* Right Section */
  .right-section {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  /* Navigation Menu */
  .menu a,
  .menu select {
    color: #ffffff; 
    text-decoration: none;
    margin-left: 15px;
    padding: 6px 12px;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    background: none;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
  }

  /* Hover effect */
.menu a:hover {
  background-color: #ffffff; 
  color: #136935;            
  border-radius: 6px;
}

  /* Login Icon */
  .login-icon img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: 0.3s;
  }

  .login-icon img:hover {
    transform: scale(1.08);
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
  }
</style>

<html>
  <body>
    <header class="header">
      <div class="logo">Shreeji Grocery</div>

      <div class="search-bar">
        <input type="text" placeholder="🔍 Search...">
      </div>

      <div class="right-section">
        <nav class="menu">
          <a href="index.php">Home</a>
          <a href="product.php">Product</a>
          <a href="contact.php">Contact Us</a>
          <a href="#feature">Feature</a>
      </nav>

        <div class="login-icon">
          <a href="profile.php">
            <img src="Image/login.png" alt="Login">
          </a>
        </div>
      </div>
    </header>
  </body>
</html>

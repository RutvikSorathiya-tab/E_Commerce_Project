<?php include 'header.php' ?>
  
<style>
  * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  body {
    background-color: #f5f5f5;
  }

  .contact-container {
    /* max-width: 1100px; */
    /* margin: 50px auto; */
    background: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
    text-align: center;
  }

  .contact-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .contact-details {
    padding: 30px;
  }

  .contact-details h2 {
    color: #136935;
    margin-bottom: 20px;
    font-size: 28px;
  }

  .contact-details p {
    font-size: 16px;
    color: #333;
    margin: 10px 0;
  }

  .contact-details a {
    color: #136935;
    text-decoration: none;
  }

  .contact-details a:hover {
    text-decoration: underline;
  }

</style>
</head>
<body>

  <div class="contact-container">
    <!-- Top Image -->
    <img src="Image/connect.jpeg" alt="Contact Image">

    <!-- Website Details -->
    <div class="contact-details">
      <h2>Contact Us</h2>
      <p>📞 Call us :- <a href="tel:+91 1234567890"</a>+91 1234567890 </p>
    <p>✉️ Email :- <a href="mailto:shreejigrocery@gmail.com">shreejigrocery@gmail.com</a></p>
    <p>📍Location :- Shreeji Grocery Shope,near v-marth ,station rode,junagadh-300162 </p>
    </div>
  </div>

 <!---------- [Footer Section] ---------->
  <?php include 'footer.php'; ?>
</body>



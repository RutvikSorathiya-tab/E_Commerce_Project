
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background:rgba(66, 50, 50, 0.61);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: rgba(254, 251, 251, 1);
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
      animation: fadeIn 1s ease-in-out;
      width: 300px;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-box h2 {
      margin-bottom: 40px;
      text-align: center;
      color: #333;
      font-size:40px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      outline: none;
    }

    .login-box button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #2c531eff;
      color: #fff;
      font-weight: bold;
      border-radius: 40px;
      cursor: pointer;
      font-size:20px;
      
    }

    .login-box button:hover {
      background: #189648ff;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Admin Login</h2>
    <form action="loginck.php" method="POST">
      <input type="text"  name="username" placeholder="Username" required>
      <input type="password"  name="password" placeholder="Password" required>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>

</body>


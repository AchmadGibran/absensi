<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    h1 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 95%;
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      display: block;
      margin: 0 auto;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
      margin-top: 10px;
    }

    @media (max-width: 600px) {
      /* CSS untuk tampilan responsif pada perangkat dengan lebar maksimum 600px */
      .container {
        max-width: 100%;
        padding: 10px;
      }

      input[type="submit"] {
        display: block;
        margin: 0 auto;
        width: 100%;
        padding: 8px 16px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login Admin</h1>
    <form method="POST" action="login_process.php">
      <label for="username">Username:</label>
      <input type="text" name="username" required>

      <label for="password">Password:</label>
      <input type="password" name="password" required>

      <input type="submit" value="Login">
    </form>
    <?php
    if (isset($_GET['error'])) {
      echo '<div class="error">Username atau password salah!</div>';
    }
    ?>
  </div>
</body>
</html>

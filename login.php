<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS Login Inventory Management System</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div class="container">
    <div class="loginHeader">
      <h1>IMS</h1>
      <p>Inventory Managment System</p>
    </div>

    <div class="loginBody">
      <form action="login.php" method="POST">
        <div class="loginInputContainer">
          <label for="">Username</label>
          <input type="text" placeholder="Username" />
        </div>
        <div class="loginInputContainer">
          <label for="">Password</label>
          <input type="password" placeholder="password"/>
        </div>
        <div class="loginButton">
          <button>Login</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
<?php
  session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login">

  <h2>Admin Login</h2>
  <form action="includes/login.inc.php" method="POST">
    <input type="text" name="user_uid" placeholder="UserID" />
    <input type="password" name="user_pwd" placeholder="Password" />
    <button type="submit" name="submit">Login</button>
  </form>
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="signup.php">Sign Up &rarr;</a>
  </div>
</div>
  
  
</body>
</html>

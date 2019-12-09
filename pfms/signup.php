<?php
  session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="signup-form">
  <h2>Signup</h2>
  <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="user_first" placeholder="Firstname">
    <input type="text" name="user_last" placeholder="Lastname">
    <input type="text" name="user_email" placeholder="E-mail">
    <input type="text" name="user_uid" placeholder="Username">
    <input type="password" name="user_pwd" placeholder="Password">
    <button type="submit" name="submit">Sign Up</button>
  </form>
</div>
  
  
</body>
</html>

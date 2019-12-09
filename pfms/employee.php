<?php
  session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Employee Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login">

  <h2>Emoloyee Login</h2>
  <form action="includes/employee.inc.php" method="POST">
    <input type="text" name="uid" placeholder="UserID" />
    <input type="password" name="pwd" placeholder="Password" />
    <button type="submit" name="submit">Login</button>
  </form>
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="signup.php">Sign Up &rarr;</a>
  </div>
</div>
  
  
</body>
</html>

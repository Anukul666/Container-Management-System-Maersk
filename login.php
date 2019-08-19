<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAERSK LINE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/all.css">
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="wrapper">
      <?php include'php/header.php'; ?>
      <div class="content">
        <form class="login-form" action="logincheck.php" method="POST">
          <h4>LOGIN FORM</h4>
          <label>Username</label>
          <input type="text" name="username" value="" placeholder="Username" required>
          <label>Password</label>
          <input type="password" name="password" value="" placeholder="Password" required>
          <p>Dont you have an account?<a href="signup.php"> Create Now</a></p>
          <input type="submit" name="loginSubmit" value="Login">
        </form>
      </div>
    </div>
    <?php include'footer.php'; ?>
  </body>
</html>

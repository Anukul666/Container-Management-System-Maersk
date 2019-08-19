<?php include 'signupprocess.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAERSK LINE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="wrapper">
      <?php include'php/header.php'; ?>
      <div class="content">
        <form class="signup-form" action="signupprocess.php" method="POST">
          <h4>SIGN UP FORM</h4>
          <div class="row">
            <div class="col">
              <label>Username</label>
              <input type="text" name="username" value="" placeholder="Username" required>
            </div>
            <div class="col">
              <label>Password</label>
              <input type="password" name="password" value="" placeholder="Password" required>
            </div>
            <div class="col">
              <label>Full Name</label>
              <input type="text" name="fullname" value="" placeholder="Full Name" required>
            </div>
            <div class="col">
              <label>Email</label>
              <input type="enail" name="email" value="" placeholder="Email" required>
            </div>
            <div class="col">
              <label>Phone Number</label>
              <input type="number" name="phoneno" value="" placeholder="Phone Number" required>
            </div>
            <div class="col">
              <label>Address</label>
              <input type="text" name="address" value="" placeholder="Address" required>
            </div>
          </div>
          <input type="submit" name="signupCustomer" value="Sign Up">
        </form>
      </div>
    </div>
    <?php include'footer.php'; ?>
  </body>
</html>

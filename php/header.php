<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header('php/header.php');
  }
?>
<div class="header">
  <div class="topnav" id="myTopnav" style="background: black;">
    <a href="index.php" class="logo-name"  style="color: white;"><img src="img/logo.png" height="24px" /> MAERSK LINE</a>
    <a href="index.php" class="active"  style="color: white;"> HOME</a>
    <a href="about.php"  style="color: white;">ABOUT</a>
    <a href="contact.php"  style="color: white;">CONTACT</a>
    <?php
    if (!isset($_SESSION['username'])) {
        echo '<a href="login.php" style="color: white; id="btn">LOGIN</a>';
    }else {
      echo '
      <div class="dropdown" id="btn">
      <button class="dropbtn"><i class="fas fa-user"></i> '.$_SESSION["username"].'
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="mybookings.php">MY BOOKINGS</a>
        <a href="logout.php">SIGN OUT</a>
      </div>
    </div>
      ';
    }
    ?>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</div>
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
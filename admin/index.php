<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maersk Line</title>
  <link rel="icon" href="img/logo.png">
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <style media="screen">
    .dashboard{
      background: red; width: 94%;
      margin-top: 3%;
      margin-left: 3%;
    }
    .box{
      width: 23.5%;
      height: 100px;
      float: left;
      border-radius: 3px;
      padding-left: 20px;
      padding-right: 20px;
      color: #fff;
    }
    .box i{
      font-size: 32px;
      line-height: 100px;
    }
    .office{
      background: #007bff;
      margin-right: 2%;
    }
    .user{
      background: #28a745;
      margin-right: 2%;
    }
    .container{
      background: #ffc107;
      margin-right: 2%;
    }
    .request{
      background: #dc3545;
    }
    .box span{font-size: 28px; float: right;}
  </style>
  </head>
  <body>
    <header>
      <div class="main">
        <div class="logo">
          <img src="img/logo.png" height="30" alt="">
          <h2><b>MAERSK</b> LINE</h2>
        </div>
        <div class="bars">
          <span id="two" onclick="closeNav() ">&#9776;</span>
          <span id="one" onclick="openNav()">&#9776;</span>
        </div>
        <a href="logout.php"><button type="button" class="logout-btn" name="button"><i class="fas fa-sign-out-alt"></i> logout</button></a>
      </div>
    </header>

    <section>
      <div id="mySidenav" class="sidebar">
        <h2>WELCOME<br><?php echo $_SESSION['username']; ?></h2>
        <ul>
          <li><a href="index.php" class="nav-btn active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li>
            <a href="#" class="nav-btn dropdown-btn"><i class="fas fa-building"></i> Transportation Office</a>
            <ul class="dropdown-container">
              <li><a href="addoffice.php" onclick="addClient()"><i class="fas fa-user-plus"></i> Add New</a></li>
              <li><a href="viewoffice.php"><i class="fas fa-search"></i> View All</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="nav-btn dropdown-btn"><i class="fas fa-ship"></i> Container Management</a>
            <ul class="dropdown-container">
              <li><a href="addcontainer.php" onclick="addClient()"><i class="fas fa-user-plus"></i> Add New</a></li>
              <li><a href="viewcontainer.php"><i class="fas fa-search"></i> View All</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="nav-btn dropdown-btn"><i class="fas fa-route"></i> Shipping Route</a>
            <ul class="dropdown-container">
              <li><a href="addroute.php" onclick="addClient()"><i class="fas fa-user-plus"></i> Add New</a></li>
              <li><a href="viewroute.php"><i class="fas fa-search"></i> View All</a></li>
            </ul>
          </li>
          <li><a href="customer.php" class="nav-btn"><i class="fas fa-users"></i> Customer Details</a></li>
          <li><a href="customerrequest.php" class="nav-btn"><i class="fas fa-envelope-open-text"></i> Customer Request</a></li>
          <li><a href="bookings.php" class="nav-btn"><i class="fas fa-book"></i> Booking Details</a></li>
          <li><a href="notification.php" class="nav-btn"><i class="fas fa-bell"></i> Notification</a></li>
        </ul>
      </div>
    </section>

    <section>
      <div id="content" class="content">
        <div class="dashboard">
          <?php
            include 'config/config.php';
            $query1 = "SELECT count(*) AS Count FROM transportationoffice";
          	$results1 = mysqli_query($conn,$query1);
            $query2 = "SELECT count(*) AS Count FROM customer";
          	$results2 = mysqli_query($conn,$query2);
            $query3 = "SELECT count(*) AS Count FROM	container";
          	$results3 = mysqli_query($conn,$query3);
            $query4 = "SELECT count(*) AS Count FROM 	bookings";
          	$results4 = mysqli_query($conn,$query4);
            mysqli_close($conn);
          ?>
          <div class="box office">
            <h2><i class="fas fa-building"></i> Total Office<span><?php while ($row = mysqli_fetch_array($results1)) echo $row['Count']; ?></span></h2>
          </div>
          <div class="box user">
            <h2><i class="fas fa-user"></i> Total Users<span><?php while ($row = mysqli_fetch_array($results2)) echo $row['Count']; ?></span></h2>
          </div>
          <div class="box container">
            <h2><i class="fas fa-ship"></i> Total Container<span><?php while ($row = mysqli_fetch_array($results3)) echo $row['Count']; ?></span>s</h2>
          </div>
          <div class="box request">
            <h2><i class="fas fa-envelope-open-text"></i> Customer Requests<span><?php while ($row = mysqli_fetch_array($results4)) echo $row['Count']; ?></span></h2>
          </div>
        </div>
      </div>
    </section>

 
  </body>
</html>

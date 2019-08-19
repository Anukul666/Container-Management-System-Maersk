<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header('location:login.php');
  }
  include 'addofficeprocess.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maersk Line</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <style media="screen" type="text/css">
    table{width: 100%;}
    tr, th, td{height: 36px; line-height: 36px; text-align: left; padding: 0px 10px;}
    tr th{background-color: #0099CB; color: #fff;}
    tr td{background-color: #eee;}
    .delete{padding: 7px; color: #fff; border-radius: 3px; font-size: 12px; text-decoration: none; background: red;}
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
        <h2>Welcome</h2>
        <ul>
          <li><a href="index.php" class="nav-btn"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li>
            <a href="#" class="nav-btn dropdown-btn active"><i class="fas fa-building"></i> Transportation Office</a>
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
        <div class="content-header">
            <h1>View Transportation Office Details</h1>
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fas fa-bus"></i> Home</a></li>
                <li><a href="#">View Teransportation Office Details</a></li>
                <li>View Transportation Office Details</li>
            </ul>
        </div>

        <div class="content-form">
          <form action="addofficeprocess.php" method="post" name="containerform">
            <div class="form-header">
              <h1>View Transportation Office Details</h1>
            </div>
            <hr>
            <div class="form-box">
                <table>
                  <tr>
                    <th>Office ID</th>
                    <th>Full Name</th>
                    <th>Office Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Location</th>
                    <th>Country</th>
                    <th>Action</th>
                  </tr>
                  <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                      <td><?php echo $row['officeid']; ?></td>
                      <td><?php echo $row['fullname']; ?></td>
                      <td><?php echo $row['officename']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contactno']; ?></td>
                      <td><?php echo $row['location']; ?></td>
                      <td><?php echo $row['country']; ?></td>
                      <td>
                        <a class="delete" href="addofficeprocess.php?delete=<?php echo $row['officeid'];?>">Delete</a>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
            </div>
          </form>
        </div>

      </div>
    </section>

    <!--Dropdown Side Navigation bar-->
    <script type="text/javascript">
      var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
    </script>

    <!--Active Side Navigation Bar-->
    <script type="text/javascript">
      var header = document.getElementById("mySidenav");
        var btns = header.getElementsByClassName("nav-btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
          }
          this.className += " active";
        });
      }
    </script>
    <!--collapse Side Navigation Bar-->
    <script type="text/javascript">
    var o =document.getElementById("two");
    var to =document.getElementById("one");
    to.style.display = 'none';
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("content").style.marginLeft= "0";
    o.style.display = 'none';
    to.style.display = '';
    }
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("content").style.marginLeft = "250px";
    o.style.display = '';
    to.style.display = 'none';
    }
    </script>
  </body>
</html>

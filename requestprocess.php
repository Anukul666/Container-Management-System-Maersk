<?php
  session_start();
  include 'config/config.php';
  if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
    if (isset($_POST['submitRequest'])){
      $departureport = $_POST['departureport'];
      $arrivalport = $_POST['arrivalport'];
      $date = $_POST['date'];
      $username = $_POST['username'];

      $sql = "INSERT INTO bookings (departureport, arrivalport, date, status, cid) VALUES ('$departureport','$arrivalport','$date', 'pending', (SELECT cid FROM customer WHERE username='$username'))";
      if(mysqli_query($conn, $sql)){
        $msg = "Request Successfully";
          header('location: index.php?msg='.$msg);
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  	}
    mysqli_close($conn);

  } else {
    header('location:login.php');
  }
?>

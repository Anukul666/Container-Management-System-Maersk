<?php
  include 'config/config.php';

  $sql = "SELECT b.bid, b.departureport, b.arrivalport, b.date, b.status, b.cid, c.username FROM bookings b, customer c where b.cid = c.cid";
  $results1 = mysqli_query($conn,$sql);
  mysqli_close($conn);
?>

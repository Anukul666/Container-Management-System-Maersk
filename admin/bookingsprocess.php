<?php
	include 'config/config.php';

  $sql = "SELECT b.bid, b.departureport, b.arrivalport, b.date, b.status, c.cid, c.fullname FROM bookings b, customer c where b.cid=c.cid";
  $results = mysqli_query($conn,$sql);
  
	mysqli_close($conn);
?>

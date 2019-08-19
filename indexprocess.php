<?php
  include 'config/config.php';

  $sql = "SELECT routeid, departureport, arrivalport, date FROM route";
  $result1 = mysqli_query($conn,$sql);
  $result2 = mysqli_query($conn,$sql);
  $result3 = mysqli_query($conn,$sql);

  mysqli_close($conn);
?>

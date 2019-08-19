<?php
	include 'config/config.php';

  $sql = "SELECT * FROM customer";
  $results = mysqli_query($conn,$sql);

	mysqli_close($conn);
?>

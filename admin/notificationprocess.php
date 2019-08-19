<?php
	include 'config/config.php';

  $sql = "SELECT * FROM message";
  $results = mysqli_query($conn,$sql);

	mysqli_close($conn);
?>

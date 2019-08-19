<?php
	include 'config/config.php';
	if (isset($_POST['submitRoute'])){
		$departureport = $_POST['departureport'];
		$arrivalport = $_POST['arrivalport'];
		$date = $_POST['date'];
		$time = $_POST['time'];
    $adminname = $_POST['adminname'];

		$sql = "INSERT INTO route (departureport, arrivalport, date, time, id) VALUES ('$departureport','$arrivalport','$date','$time', (SELECT id FROM admininfo WHERE username='$adminname'))";
		if(mysqli_query($conn, $sql)){
			$msg = "Added Successfully";
		    header('location: addroute.php?msg='.$msg);
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}

	$sql = "SELECT * FROM route";
	$results = mysqli_query($conn,$sql);

	if (isset($_GET['delete'])) {
    $routeid = $_GET['delete'];
    $sql1 = "DELETE FROM route  where routeid = $routeid";
    $result2 = mysqli_query($conn, $sql1);
    header('location: viewroute.php');
  }
	mysqli_close($conn);
?>

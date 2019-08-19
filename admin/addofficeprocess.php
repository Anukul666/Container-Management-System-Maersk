<?php
	include 'config/config.php';
	if (isset($_POST['submitOffice'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$officename = $_POST['officename'];
		$email = $_POST['email'];
		$contactno = $_POST['contactno'];
		$location = $_POST['location'];
    $country = $_POST['country'];
    $adminname = $_POST['adminname'];

		$sql = "INSERT INTO transportationoffice (username, password, fullname, officename, email, contactno, location, country, id) VALUES ('$username','$password','$fullname','$officename', '$email', '$contactno', '$location', '$country', (SELECT id FROM admininfo WHERE username='$adminname'))";
		if(mysqli_query($conn, $sql)){
			$msg = "Added Successfully";
		    header('location: addoffice.php?msg='.$msg);
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}
	$sql = "SELECT * FROM transportationoffice";
	$results = mysqli_query($conn,$sql);

	if (isset($_GET['delete'])) {
    $officeid = $_GET['delete'];
    $sql1 = "DELETE FROM transportationoffice  where officeid = $officeid";
    $result2 = mysqli_query($conn, $sql1);
    header('location: viewoffice.php');
  }
	mysqli_close($conn);
?>

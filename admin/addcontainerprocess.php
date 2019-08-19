<?php
	include 'config/config.php';
	if (isset($_POST['submitContainer'])){
		$containerno = $_POST['containerno'];
		$tareweight = $_POST['tareweight'];
		$payloadcapacity = $_POST['payloadcapacity'];
		$cubiccapacity = $_POST['cubiccapacity'];
		$internallength = $_POST['internallength'];
		$internalwidth = $_POST['internalwidth'];
		$internalheight = $_POST['internalheight'];
    $containerlocation = $_POST['containerlocation'];
    $adminname = $_POST['adminname'];

		$sql = "INSERT INTO container (containerno, tareweight, payloadcapacity, cubiccapacity, internallength, internalwidth, internalheight, containerlocation, id) VALUES ('$containerno','$tareweight','$payloadcapacity','$cubiccapacity', '$internallength', '$internalwidth', '$internalheight', '$containerlocation', (SELECT id FROM admininfo WHERE username='$adminname'))";
		if(mysqli_query($conn, $sql)){
			$msg = "Added Successfully";
		    header('location: addcontainer.php?msg='.$msg);
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}

	$sql = "SELECT * FROM container";
	$results = mysqli_query($conn,$sql);

	if (isset($_GET['delete'])) {
    $containerno = $_GET['delete'];
    $sql1 = "DELETE FROM container  where containerno = $containerno";
    $result2 = mysqli_query($conn, $sql1);
    header('location: viewcontainer.php');
  }
	mysqli_close($conn);
?>

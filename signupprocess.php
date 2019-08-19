<?php
	include 'config/config.php';

	if (isset($_POST['signupCustomer'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customer (username, password, fullname, email, phoneno, address) VALUES ('$username','$password','$fullname','$email', '$phoneno', '$address')";
    if(mysqli_query($conn, $sql)){
      $msg = "Signup Successfully";
        header('location: login.php?msg='.$msg);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
  mysqli_close($conn);
?>

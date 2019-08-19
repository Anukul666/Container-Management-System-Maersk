<?php
	include 'config/config.php';

	if (isset($_POST['submitContact'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO message (firstname, lastname, country, subject) VALUES ('$firstname','$lastname','$country','$subject')";
    if(mysqli_query($conn, $sql)){
      $msg = "Send Successfully";
        header('location: contact.php?msg='.$msg);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
  mysqli_close($conn);
?>

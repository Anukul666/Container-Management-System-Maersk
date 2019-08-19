<?php
  session_start();
  include 'config/config.php';
  if(isset($_POST['loginSubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = " select * from customer where username = '$username' and password = '$password'";

    $query = mysqli_query($conn,$sql);

    $row = mysqli_num_rows($query);

    if ($row == 1){
      echo "Login succesful";
      $_SESSION['username'] = $username;
      header('location:index.php');
    }else {
      echo "Login failed";
      header('location:login.php');
    }
  }
?>

<?php
  session_start();

  include 'config/config.php';

  if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admininfo WHERE username = '$username' AND password = '$password'";

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
  mysqli_close($conn);
?>

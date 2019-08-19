<?php
  include 'mybookingsprocess.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAERSK LINE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/all.css">
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <style media="screen" type="text/css">
      .table-box{width: 600px; height: 400px; background-color: #fff; margin: 0px auto; margin-top: 100px; border-radius: 3px;}
      table{width: 100%;}
      tr, th, td{height: 36px; line-height: 36px; text-align: left; padding: 0px 10px;}
      tr th{background-color: #0099CB; color: #fff;}
      tr td{background-color: #eee;}
      @media screen and (max-width: 768px) {
        .table-box{width: 90%; margin-left: 5%; margin-right: 5%; margin-top: 50px;}
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <?php include'php/header.php'; ?>
      <div class="content">
        <div class="table-box">
          <label style="display: none;" name="username"><?php echo $_SESSION['username'];  ?></label>
          <table>
            <tr>
              <th>Booking ID</th>
              <th>Departure Port</th>
              <th>Arrival Port</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($results1)) {
              if ($_SESSION['username'] == $row['username']) { ?>
                <tr>
                  <td><?php echo $row['bid']; ?></td>
                  <td><?php echo $row['departureport']; ?></td>
                  <td><?php echo $row['arrivalport']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                </tr>
              <?php }
              } ?>
          </table>
        </div>
      </div>
    </div>
    <?php include'footer.php'; ?>
  </body>
</html>

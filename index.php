<?php
  include 'indexprocess.php';
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
  </head>
  <body>
    <div class="wrapper">
      <?php include'php/header.php'; ?>
      <div class="content">
        <h2>SEARCH CONTAINER BY PORT</h2>
        <form action="requestprocess.php" method="POST">
          <input style="display: none;" type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
          <label>Departure Port</label>
          <select name="departureport" required>
            <option value="">Select Departure Port</option>
            <?php while ($row1 = mysqli_fetch_array($result1)):;?>
              <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
          </select>
          <label>Arrival Port</label>
          <select name="arrivalport" required>
            <option value="">Select Arrival Port</option>
            <?php while ($row2 = mysqli_fetch_array($result2)):;?>
              <option value="<?php echo $row2[2];?>"><?php echo $row2[2];?></option>
            <?php endwhile;?>
          </select>
          <label>Date</label>
          <select name="date" required>
            <option value="">Select Date</option>
            <?php while ($row3 = mysqli_fetch_array($result3)):;?>
              <option value="<?php echo $row3[3];?>"><?php echo $row3[3];?></option>
            <?php endwhile;?></select>
          <input type="submit" name="submitRequest" value="Request">
        </form>
      </div>
    </div>
    <?php include'footer.php'; ?>
  </body>
</html>

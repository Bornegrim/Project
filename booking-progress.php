<?php
  require 'include/bootstrap.php';

  if (isset($_POST['datetester'])) {
    $date = $_POST['datetester'];
    echo $date;

  }

  if (isset($_POST['block1'])) {
    echo "'+dateText+'";
    exit();
  } else if (isset($_POST['block2'])) {
    exit();
  } else if (isset($_POST['block3'])) {
    exit();
  } else if (isset($_POST['block4'])) {
    exit();
  } else if (isset($_POST['block5'])) {
    exit();
  } else {
    header("Location: booking.php");
    exit();
}

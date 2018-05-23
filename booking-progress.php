<?php
  require 'include/bootstrap.php';

  if (isset($_POST['date'])) {
    $date = $_POST['date'];
    echo $date;
  }

  if (isset($_POST['block1'])) {
    echo $_POST['date'];

  } else if (isset($_POST['block2'])) {

  } else if (isset($_POST['block3'])) {

  } else if (isset($_POST['block4'])) {

  } else if (isset($_POST['block5'])) {

  } else {
    header("Location: booking.php");

}

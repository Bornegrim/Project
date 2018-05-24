<?php
  require 'include/bootstrap.php';

  $booking = new Booking();

  $machine = 1;

  $timeBlock1 = 1;
  $timeBlock2 = 2;
  $timeBlock3 = 3;
  $timeBlock4 = 4;
  $timeBlock5 = 5;

  if (isset($_POST['date'])) {
    $date = $_POST['date'];
  }

  if (isset($_SESSION['User'])) {
    $UserID = $_SESSION['User'];
  }

  if (isset($_POST['block1'])) {

    $booking->book($timeBlock1, $machine, $UserID, $date);

  } else if (isset($_POST['block2'])) {

    $booking->book($timeBlock2, $machine, $UserID, $date);

  } else if (isset($_POST['block3'])) {

    $booking->book($timeBlock3, $machine, $UserID, $date);

  } else if (isset($_POST['block4'])) {

    $booking->book($timeBlock4, $machine, $UserID, $date);

  } else if (isset($_POST['block5'])) {

    $booking->book($timeBlock5, $machine, $UserID, $date);

  } else {
    header("Location: booking.php");

}

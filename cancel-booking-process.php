<?php

require 'include/bootstrap.php';

if (isset($_POST['cancel'])) {

  $timeblockID = $_POST['TimeblockID'];

  $booking = new booking();
  $booking->cancelBooking($timeblockID);

  header("Location: cancel-booking.php");
}

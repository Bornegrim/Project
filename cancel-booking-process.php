<?php

require 'include/bootstrap.php';



  $timeblockID = $_POST['TimeblockID'];

  $booking = new booking();
  $booking->cancelBooking($timeblockID);

<?php

require 'include/bootstrap.php';

$session = $authorizer->sessionExist('Email');

if (!$session) {
  header('Location: login.php');
  exit();
}

$booking = new Booking();
$bookings = $booking->getAllBookings();

include 'include/views/_header.php';
include 'include/views/cancel-booking.php';
include 'include/views/_footer.php';

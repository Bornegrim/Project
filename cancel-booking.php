<?php

  require 'include/bootstrap.php';

  $booking = new Booking();
  $bookings = $booking->getAllBookings();
  
  include 'include/views/_header.php';
  include 'include/views/cancel-booking.php';
  include 'include/views/_footer.php';

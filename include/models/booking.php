<?php

class Booking extends Db {

  public function book($timeBlock, $machine, $UserID, $date) {
    $db = new Db();
    if (!isset($_SESSION['Admin'])) {
      $db->setBookedTimeblock($db->escape($timeBlock), $db->escape($machine), $db->escape($UserID), $db->escape($date));
    }

  }

  public function getAllBookingsByDate($date) {
    $db = new Db();
    $result = $db->getAllBookingsByDate($db->escape($date));

    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function getAllBookings() {
    $db = new Db();
    $result = $db->getAllBookings();

    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function cancelBooking($timeblockID) {
    $db= new Db();
    $db->cancelBooking($db->escape($timeblockID));
  }


}

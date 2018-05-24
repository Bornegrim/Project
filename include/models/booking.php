<?php

class Booking extends Db {

    public function book($timeBlock, $machine, $UserID, $date) {
      $db = new Db();
      $db->setBookedTimeblock($timeBlock, $machine, $UserID, $date);
    }

    public function getAllBookings($date) {
      $db = new Db();
      $result = $db->getAllBookings($date);

      $numRows = mysqli_num_rows($result);

      if ($numRows > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
    }


}

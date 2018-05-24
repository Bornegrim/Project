<?php

class Booking extends Db {

    public function book($timeBlock, $machine, $UserID, $date) {

      $db = new Db();
      $db->setBookedTimeblock($timeBlock, $machine, $UserID, $date);
    }



}

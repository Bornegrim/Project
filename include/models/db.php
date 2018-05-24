<?php
  class Db {

    private $uname;
    private $pass;
    private $host;
    private $dbname;

    protected function connect() {
      $this->host = "n3plcpnl0118.prod.ams3.secureserver.net";
      $this->uname = "Bornelu";
      $this->pass = "Gitgud@@@123";
      $this->dbname = "Bornegrim";

      $conn = new mysqli($this->host, $this->uname, $this->pass, $this->dbname);
      return $conn;
    }

    protected function getPosts() {
      $sql = "SELECT Date, Message, Admin.FirstName FROM Messageboard_Post JOIN Admin ON Messageboard_Post.UserID=Admin.UserID ORDER BY Date ASC";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function setPosts($post, $userID) {
      $sql = "INSERT INTO Messageboard_Post(Message, UserID)VALUES('$post', '$userID')";
      mysqli_query($this->connect(), $sql);
    }

    protected function getUser($email, $table) {
      $sql = "SELECT UserID, Email, Password FROM $table WHERE Email = '$email'";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function regUser ($firstName, $lastName, $pass, $email) {
      $sql = "INSERT INTO User(FirstName, LastName, Password, Email)VALUES('$firstName', '$lastName', '$pass', '$email')";
      mysqli_query($this->connect(), $sql);
    }

    protected function getEmail ($column, $value, $table) {
      $sql = "SELECT Email, FirstName FROM $table WHERE $column = '$value'";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    private function getBookedTimeblock($timeBlock, $date, $machine) {
      $sql = "SELECT TimeblockID FROM Booked_Timeblock WHERE TimeblockNumber = '$timeBlock' AND DateBooked = '$date' AND Machine ='$machine' ";
      $result = mysqli_query($this->connect(), $sql);

      $userdata = mysqli_fetch_object($result);

      if (mysqli_num_rows($result) > 0) {

        $timeBlockID = $userdata->TimeblockID;

        return $timeBlockID;
      }

    }

    private function setBooking($timeBlockID, $UserID) {

      $sql = "INSERT INTO Booking(TimeblockID, User)VALUES('$timeBlockID', '$UserID')";
      mysqli_query($this->connect(), $sql);

    }

    protected function setBookedTimeblock($timeBlock, $machine, $UserID, $date) {

      $result = $this->getBookedTimeblock($timeBlock, $date, $machine);

      if (Empty($result)) {
        $sql = "INSERT INTO Booked_Timeblock(TimeBlockNumber, DateBooked, Machine)VALUES('$timeBlock', '$date', '$machine')";
        mysqli_query($this->connect(), $sql);

        $timeBlockID = $this->getBookedTimeblock($timeBlock, $date, $machine);

        $this->setBooking($timeBlockID, $UserID);
      }

    }

    protected function getAllBookings() {
      $sql = "SELECT TimeBlockNumber, DateBooked, Machine FROM Booked_Timeblock";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }




  }

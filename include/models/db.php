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
      $sql = "SELECT PostID, Date, Message, Admin.FirstName FROM Messageboard_Post JOIN Admin ON Messageboard_Post.UserID=Admin.UserID ORDER BY Date DESC";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function setPosts($post, $userID) {
      $sql = "INSERT INTO Messageboard_Post(Message, UserID)VALUES('$post', '$userID')";
      mysqli_query($this->connect(), $sql);
    }

    protected function deletePost($postID) {
      $sql = "DELETE FROM Messageboard_Post WHERE PostID='$postID'";
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

      $time = date("Y-m-d", strtotime($date));

      $sql = "SELECT TimeblockID FROM Booked_Timeblock WHERE TimeblockNumber = '$timeBlock' AND DateBooked = '$time' AND Machine ='$machine' ";
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

      $time = date("Y-m-d", strtotime($date));

      $result = $this->getBookedTimeblock($timeBlock, $time, $machine);

      if (Empty($result)) {
        $sql = "INSERT INTO Booked_Timeblock(TimeBlockNumber, DateBooked, Machine)VALUES('$timeBlock', '$time', '$machine')";
        mysqli_query($this->connect(), $sql);

        $timeBlockID = $this->getBookedTimeblock($timeBlock, $time, $machine);

        $this->setBooking($timeBlockID, $UserID);
      }

    }

    protected function getAllBookingsByDate($date) {
      $time = date("Y-m-d", strtotime($date));

      $sql = "SELECT TimeblockNumber, Machine FROM Booked_Timeblock WHERE DateBooked = '$time'";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function getAllBookings() {

      $sql = "SELECT Booked_Timeblock.TimeblockID, TimeblockNumber, DateBooked, Machine, Booking.User, FirstName FROM Booked_Timeblock JOIN Booking ON Booking.TimeblockID=Booked_Timeblock.TimeblockID JOIN User ON User.UserID=Booking.User ORDER BY DateBooked ASC";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function cancelBooking($timeblockID) {
      $sql1 = "DELETE FROM Booked_Timeblock WHERE TimeblockID='$timeblockID'";
      $sql2 = "DELETE FROM Booking WHERE TimeblockID='$timeblockID'";
      mysqli_query($this->connect(), $sql1);
      mysqli_query($this->connect(), $sql2);

    }

    protected function createTopic($topicName) {
      $sql = "INSERT INTO Forum(Topic)VALUES('$topicName')";
      mysqli_query($this->connect(), $sql);
    }

    protected function createForumPost($date, $message, $ForumID, $UserID) {

      $sql = "INSERT INTO Forum_Post(Date, Message, ForumID, UserID)VALUES('$date', '$message', '$ForumID', '$UserID')";
      mysqli_query($this->connect(), $sql);
    }

    protected function getAllTopics() {
      $sql = "SELECT ForumID, Topic FROM Forum";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function getAllForumPosts($ForumID) {
      $sql = "SELECT Forum_Post.UserID, Forum_PostID, Date, Message, User.FirstName FROM Forum_Post JOIN Forum ON Forum_Post.ForumID=Forum.ForumID JOIN User ON Forum_Post.UserID=User.UserID WHERE Forum_Post.ForumID = '$ForumID' UNION SELECT Forum_Post.UserID, Forum_PostID, Date, Message, Admin.FirstName FROM Forum_Post JOIN Forum ON Forum_Post.ForumID=Forum.ForumID
      JOIN Admin ON Forum_Post.UserID=Admin.UserID WHERE Forum_Post.ForumID = '$ForumID' ORDER BY Forum_PostID ASC";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function deleteForumTopic($ForumID) {
      $sql1 = "DELETE FROM Forum WHERE ForumID = '$ForumID'";
      $sql2 = "DELETE FROM Forum_Post WHERE ForumID = '$ForumID'";
      mysqli_query($this->connect(), $sql1);
      mysqli_query($this->connect(), $sql2);
    }

    protected function deleteForumPost($forumPostID) {
      $sql = "DELETE FROM Forum_Post WHERE Forum_PostID = '$forumPostID'";
      mysqli_query($this->connect(), $sql);
    }

  }

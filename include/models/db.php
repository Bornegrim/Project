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
      $sql = "SELECT Date, Message, UserID FROM Messageboard_Post ORDER BY Date ASC";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function setPosts($post, $userID) {
      $sql = "INSERT INTO Messageboard_Post(message, userID)VALUES('$post', '$userID')";
      mysqli_query($this->connect(), $sql);
    }

    protected function getUser($email) {
      $sql = "SELECT UserID, Email, Password FROM User WHERE Email = '$email'";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }

    protected function regUser ($firstName, $lastName, $pass, $email) {
      $sql = "INSERT INTO User(FirstName, LastName, Password, Email)VALUES('$firstName', '$lastName', '$pass', '$email')";
      mysqli_query($this->connect(), $sql);
    }

    protected function getEmail ($email) {
      $sql = "SELECT Email, FirstName FROM User WHERE Email = '$email'";
      $result = mysqli_query($this->connect(), $sql);
      return $result;
    }
  }

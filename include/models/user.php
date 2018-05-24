<?php

class User extends Db {

  private function test_email($data) {
    $atpos = strpos($data, "@");
    $dotpos = strripos($data, ".");
    if ($atpos === false || $dotpos === false) {
      return false;
    } else {
        if ($atpos<1 || $dotpos<($atpos+2) || $dotpos+2>=(strlen($data))) {
          return false;
        } else {
          return true;
      }
    }
  }

  public function login($email, $password, $table) {

    $db = new Db();
    $conn = $db->connect();


    $emaillogin = mysqli_real_escape_string($conn, $email);
    $passwordlogin = mysqli_real_escape_string($conn, $password);

    if ($this->test_email($emaillogin)) {

        $result = $db->getUser($emaillogin, $table);

        if (mysqli_num_rows($result) == 1) {
          $userdata = mysqli_fetch_array($result);
          $hashedpass = $userdata['Password'];

          return password_verify($passwordlogin, $hashedpass);
        }

    }
  }

  public function register ($firstName, $lastName, $password, $email) {

    $db = new Db();
    $conn = $db->connect();

    $emailreg = mysqli_real_escape_string($conn, trim($email));
    $passwordreg = mysqli_real_escape_string($conn, trim($password));
    $firstNamereg = mysqli_real_escape_string($conn, trim($firstName));
    $lastNamereg = mysqli_real_escape_string($conn, trim($lastName));

    $result = $db->getEmail('Email', $emailreg, 'User');

    if (mysqli_num_rows($result) > 0) {
      header("Location: register.php?registerfail=1");
      exit();
  } else {

    if (!($this->test_email($emailreg))) {
          $emailreg = "";
      }

    if (!Empty($emailreg) && (!Empty($passwordreg) && !($passwordreg === " "))) {
      $passwordhashed = password_hash($passwordreg, PASSWORD_DEFAULT);
      $db->regUser($firstNamereg, $lastNamereg, $passwordhashed, $emailreg);

    } else {
      header("Location: register.php");
      exit();
    }
    }
  }

    public function getName ($column, $value, $table) {
        $db = new Db();

        $result = $db->getEmail($column, $value, $table);
        $row = mysqli_fetch_array($result);
        $name = $row['FirstName'];
        return $name;
    }

    public function getUser ($email, $table) {
        $db = new Db();

        $result = $db->getUser($email, $table);
        $row = mysqli_fetch_array($result);
        $UserId = $row['UserID'];
        return $UserId;
    }
}

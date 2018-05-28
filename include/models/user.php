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

    if ($this->test_email($email)) {

      $result = $db->getUser($db->escape($email), $table);

      if (mysqli_num_rows($result) == 1) {
        $userdata = mysqli_fetch_array($result);
        $hashedpass = $userdata['Password'];

        return password_verify($password, $hashedpass);
      }

    }
  }

  public function register ($firstName, $lastName, $password, $email) {

    $db = new Db();

    $result = $db->getEmail('Email', $db->escape($email), 'User');

    if (mysqli_num_rows($result) > 0) {
      header("Location: register.php?registerfail=1");
      exit();
    } else {

      if (!($this->test_email($email))) {
        $email = "";
      }

      if (!Empty($email) && (!Empty($password) && !($password === " "))) {
        $passwordhashed = password_hash($password, PASSWORD_DEFAULT);
        $db->regUser($db->escape($firstName), $db->escape($lastName), $db->escape($passwordhashed), $db->escape($email));

      } else {
        header("Location: register.php");
        exit();
      }
    }
  }

  public function getName ($column, $value, $table) {
    $db = new Db();

    $result = $db->getEmail($column, $db->escape($value), $table);
    $row = mysqli_fetch_array($result);
    $name = $row['FirstName'];
    return $name;
  }

  public function getUser ($email, $table) {
    $db = new Db();

    $result = $db->getUser($db->escape($email), $table);
    $row = mysqli_fetch_array($result);
    $UserId = $row['UserID'];
    return $UserId;
  }
}
